<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest();

            $kelas = $request->input('kelasFilter');
            if (isset($kelas)) {
                $data = $data->whereRelation('kelas', 'id', $kelas);
            }

            $data = $data->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nisn', function ($row) {
                    return '<span>' . $row->nisn . '</span>';
                })
                ->addColumn('student_name', function ($row) {
                    return '<span>' . $row->nama . '</span>';
                })
                ->addColumn('kelas', function ($row) {
                    return '<span>' . $row->kelas->nama_kelas . '</span>';
                })
                ->addColumn('jenis_kelamin', function ($row) {
                    return '<span>' . $row->jenis_kelamin . '</span>';
                })
                ->addColumn('alamat', function ($row) {
                    return '<span>' . $row->alamat . '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['nisn', 'student_name', 'kelas', 'jenis_kelamin', 'alamat', 'latest'])
                ->toJson();
        }
        $kelas = Kelas::all();
        return view('pages.master.data-siswa.index', compact('kelas'));
    }

    public function getData(Request $request, $id)
    {
        if ($request->ajax()) {
            $data = Student::with('kelas')->findOrFail($id);
            return response()->json([
                'status' => '200',
                'message' => 'Success Fetched data',
                'data' => $data
            ]);
        }
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
                'nisn' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'kelas_id' => 'required',
                'no_wa_ortu' => 'required',
            ]);

            Student::create($request->all());
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');

            return redirect()->route('data-siswa.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back()->withErrors('Oppss, Something went wrong', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
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
                'nisn' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'kelas_id' => 'required',
                'no_wa_ortu' => 'required',
            ]);

            $data = [
                'nisn' => $request->nisn,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'kelas_id' => $request->kelas_id,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_wa_ortu' => $request->no_wa_ortu,
            ];

            Student::where('id', $id)->update($data);

            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('data-siswa.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Student::where('id', $id)->delete();
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
