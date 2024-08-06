<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
           

            $data = Student::orderBy('nis','asc')->latest();

            // Apply 'kelas' filter if it exists in the request
            $kelas = $request->input('kelasFilter');
            if (!empty($kelas)) {
                $data = $data->whereRelation('kelas', 'id', $kelas);
            }
            
            // Apply additional filtering if the user is a teacher and not a guidance counselor
            if (Auth::user()->type == 'guru' && Auth::user()->is_guru_bk == 'false') {
                $data = $data->whereHas('kelas', function($query) {
                    $query->where('user_id', Auth::user()->id);
                });
            }
            
            // Get the final result set
            $data = $data->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nis', function ($row) {
                    return '<span>' . $row->nis . '</span>';
                })
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
                    return '<span>' . ucWords($row->jenis_kelamin) . '</span>';
                })
                ->addColumn('ttl', function ($row) {
                    return '<span>' . $row->tempat . ', ' . Carbon::parse($row->tanggal_lahir)->format('d F Y') .  '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['nisn', 'student_name', 'kelas', 'jenis_kelamin', 'ttl', 'latest','nis'])
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
                'nis' => 'required',
                'nisn' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'kelas_id' => 'required',
                // 'no_wa_ortu' => 'required',
                'tempat' => 'required',
                'tanggal_lahir' => 'required',
            ]);
    
            $data = [
                'nis' => $request->nis,
                'nisn' => $request->nisn,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'kelas_id' => $request->kelas_id,
                // 'no_wa_ortu' => $request->no_wa_ortu,
                'tempat' => $request->tempat,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            ];
            Student::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');
    
            return redirect()->route('data-siswa.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back()->withErrors($e->getMessage())->withInput();
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
                'nis' => 'required',
                'nisn' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'kelas_id' => 'required',
                // 'no_wa_ortu' => 'required',
                'tempat' => 'required',
                'tanggal_lahir' => 'required',
            ]);

            $data = [
                'nis' => $request->nis,
                'nisn' => $request->nisn,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'kelas_id' => $request->kelas_id,
                // 'no_wa_ortu' => $request->no_wa_ortu,
                'tempat' => $request->tempat,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            ];

            Student::where('id', $id)->update($data);

            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('data-siswa.index');
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
