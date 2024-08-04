<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataKelas;
use App\Http\Requests\UpdateDataKelas;
use App\Models\Kelas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kelas::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kelas', function ($row) {
                    return '<span>' . $row->kelas . '</span>';
                })
                ->addColumn('nama_kelas', function ($row) {
                    return '<span>' . $row->nama_kelas . '</span>';
                })
                ->addColumn('wali_kelas', function ($row) {
                    return '<span>' . $row->guru?->name . ' </span>';
                })
                ->addColumn('jumlah_siswa', function ($row) {
                    return '<span>' . count($row->students) . ' Siswa </span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['kelas', 'nama_kelas', 'jumlah_siswa', 'latest', 'wali_kelas'])
                ->toJson();
        }

        $getTeacher = User::where('is_guru_bk', 'false')->where('type', 0)->get();
        $kelas = Kelas::all();

        $teachers = [];
        $teacherIdsInClass = [];

        // Kumpulkan semua user_id dari kelas ke dalam array
        foreach ($kelas as $kls) {
            $teacherIdsInClass[] = $kls->user_id;
        }

        // Loop melalui semua guru
        foreach ($getTeacher as $teacher) {
            // Tambahkan guru ke $teacherData jika ID mereka tidak ada dalam $teacherIdsInClass
            if (!in_array($teacher->id, $teacherIdsInClass)) {
                $teachers[] = $teacher;
            }
        }

        // dd($teachers);
        return view('pages.master.data-kelas.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'kelas' => 'required',
                'nama_kelas' => 'required',
            ]);

            $data = [
                'kelas' => $request->kelas,
                'nama_kelas' => $request->nama_kelas,
            ];

            Kelas::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');

            return redirect()->route('data-kelas.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());

            return redirect()->back()->withInput()->withError();
        }
    }

    public function getData(Request $request, $id)
    {
        // dd('anjeng');
        if ($request->ajax()) {
            $data = Kelas::findOrFail($id);
            return response()->json([
                'status' => '200',
                'message' => 'Success Fetched data',
                'data' => $data
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'kelas' => 'required',
                'nama_kelas' => 'required',
                'wali_kelas_id' => 'nullable',
            ]);
            $data = [
                'kelas' => $request->kelas,
                'nama_kelas' => $request->nama_kelas,
                'user_id' => $request->wali_kelas,
            ];

            Kelas::where('id', $id)->update($data);
            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('data-kelas.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Kelas::where('id', $id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Data Berhasil Dihapus',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Data Berhasil Dihapus', $e->getMessage(),
            ]);
        }
    }
}
