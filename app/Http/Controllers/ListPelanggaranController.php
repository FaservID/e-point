<?php

namespace App\Http\Controllers;

use App\Models\KategoriPelanggaran;
use App\Models\ListPelanggaran;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ListPelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ListPelanggaran::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nisn', function ($row) {
                    return '<span>' . $row->student->nisn . '</span>';
                })
                ->addColumn('student_name', function ($row) {
                    return '<span>' . $row->student->nama . '</span>';
                })
                ->addColumn('kelas', function ($row) {
                    return '<span>' . $row->student->kelas->nama_kelas . '</span>';
                })
                ->addColumn('catatan', function ($row) {
                    return '<span>' . $row->catatan . '</span>';
                })
                ->addColumn('status', function ($row) {
                    $class = 'bg-success';
                    $status = $row->status;
                    $message = 'Close';
                    if ($status == 'false') {
                        $class = 'bg-danger';
                        $message = 'Open';
                    }
                    return '<span class="badge ' . $class . '">' . $message . '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['nisn', 'student_name', 'kelas', 'catatan', 'latest','status'])
                ->toJson();
        }
        return view('admin.list-pelanggaran.index');
    }
    public function listPelanggaran(Request $request)
    {
        if ($request->ajax()) {

            $data = ListPelanggaran::where('user_id', Auth::user()->id)->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nisn', function ($row) {
                    return '<span>' . $row->student->nisn . '</span>';
                })
                ->addColumn('student_name', function ($row) {
                    return '<span>' . $row->student->nama . '</span>';
                })
                ->addColumn('kelas', function ($row) {
                    return '<span>' . $row->student->kelas->nama_kelas . '</span>';
                })
                ->addColumn('catatan', function ($row) {
                    return '<span>' . $row->catatan . '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['nisn', 'student_name', 'kelas', 'catatan', 'latest'])
                ->toJson();
        }
        $students = Student::all();
        $categories = KategoriPelanggaran::all();
        return view('guru.list-pelanggaran.index', compact('students', 'categories'));
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
                'student_id' => 'required',
                'catatan' => 'required',
            ]);

            $data = [
                'student_id' => $request->student_id,
                'user_id' => Auth::user()->id,
                'kategori_id' => $request->kategori_id,
                'catatan' => $request->catatan,
            ];
            ListPelanggaran::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');

            return redirect()->route('guru.list-pelanggaran.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());

            return redirect()->back()->withErrors('Oppss, Something went wrong', $e->getMessage());
        }
    }

    public function getData(Request $request, $id)
    {
        // dd('anjeng');
        if ($request->ajax()) {
            $data = ListPelanggaran::findOrFail($id);
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
    public function show(ListPelanggaran $listPelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListPelanggaran $listPelanggaran)
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
                'student_id' => 'required',
                'kategori_id' => 'required',
                'catatan' => 'required',
            ]);

            $data = [
                'student_id' => $request->student_id,
                'kategori_id' => $request->kategori_id,
                'catatan' => $request->catatan,
            ];

            ListPelanggaran::where('id', $id)->update($data);

            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('guru.list-pelanggaran.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function validatePelanggaran($id)
    {
        try {
            ListPelanggaran::where('id', $id)->update(['status' => 'true']);
            return response()->json([
                'status' => 200,
                'message' => 'Data Berhasil Divalidasi',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Data Berhasil Divalidasi', $e->getMessage(),
            ]);
        }
    }
    public function destroy($id)
    {
        try {
            ListPelanggaran::where('id', $id)->delete();
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
