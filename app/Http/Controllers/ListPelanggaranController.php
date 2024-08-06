<?php

namespace App\Http\Controllers;

use App\Models\KategoriPelanggaran;
use App\Models\Kelas;
use App\Models\ListPelanggaran;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

use function PHPUnit\Framework\isEmpty;

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
                ->addColumn('nis', function ($row) {
                    return '<span>' . $row->student->nis . '</span>';
                })
                ->addColumn('nisn', function ($row) {
                    return '<span>' . $row->student->nisn . '</span>';
                })
                ->addColumn('student_name', function ($row) {
                    return '<span>' . $row->student->nama . '</span>';
                })
                ->addColumn('kelas', function ($row) {
                    return '<span>' . $row->student->kelas->nama_kelas . '</span>';
                })
                ->addColumn('kategori_pelanggaran', function ($row) {
                    return '<span>' . $row->kategori->kategori_pelanggaran . '</span>';
                })
                ->addColumn('catatan', function ($row) {
                    return '<span>' . $row->catatan . '</span>';
                })
                ->addColumn('status_pelanggaran', function ($row) {
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
                ->rawColumns(['nis','nisn', 'student_name', 'kelas', 'catatan', 'latest', 'kategori_pelanggaran', 'status_pelanggaran'])
                ->toJson();
        }
        return view('admin.list-pelanggaran.index');
    }

    public function listPelanggaran(Request $request)
    {
        if ($request->ajax()) {


            if (Auth::user()->type == 'guru' && Auth::user()->is_guru_bk == 'true') {
                $data = ListPelanggaran::where('user_id', Auth::user()->id);
            } elseif (Auth::user()->type == 'guru' && Auth::user()->is_guru_bk == 'false') {
                $data = ListPelanggaran::whereHas('student.kelas', function ($query) {
                    $query->where('user_id', '=', Auth::user()->id);
                });
            } else {
                $data = ListPelanggaran::latest();
            }
            $kelas = $request->input('kelasFilter');
            if (isset($kelas)) {
                $data = $data->whereRelation('student.kelas', 'id', $kelas);
            }

            $siswa = $request->input('siswaFilter');
            if (isset($siswa)) {
                $data = $data->whereRelation('student', 'id', $siswa);
            }
            // $period = ListPelanggaran::latest()->first();
            // dd($period);
            $data = $data->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nis', function ($row) {
                    return '<span>' . $row->student->nis . '</span>';
                })
                ->addColumn('nisn', function ($row) {
                    return '<span>' . $row->student->nisn . '</span>';
                })
                ->addColumn('student_name', function ($row) {
                    return '<span>' . $row->student->nama . '</span>';
                })
                ->addColumn('kelas', function ($row) {
                    return '<span>' . $row->student->kelas->nama_kelas . '</span>';
                })
                ->addColumn('kategori_pelanggaran', function ($row) {
                    return '<span>' . $row->kategori->kategori_pelanggaran . '</span>';
                })
                ->addColumn('catatan', function ($row) {
                    return '<span>' . $row->catatan . '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->created_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['nis','nisn', 'student_name', 'kelas', 'catatan', 'latest', 'kategori_pelanggaran'])
                ->toJson();
        }
        $students = Student::all();
        $kelas = Kelas::all();
        $categories = KategoriPelanggaran::all();
        return view('guru.list-pelanggaran.index', compact('students', 'categories', 'kelas'));
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
                'kategori_id' => 'required',
            ]);

            $checkPeriod = ListPelanggaran::latest()->first();
            $period = 1;

            if (!empty($checkPeriod)) {
                if ($checkPeriod->status_period === 'close') {
                    $period = intval($checkPeriod->period) + 1;
                } else {
                    $period = $checkPeriod->period;
                }
            }

            $data = [
                'student_id' => $request->student_id,
                'user_id' => Auth::user()->id,
                'kategori_id' => $request->kategori_id,
                'period' => $period,
                'catatan' => $request->catatan,
            ];

            ListPelanggaran::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');

            return redirect()->route('guru.list-pelanggaran.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());

            return redirect()->back()->withErrors('Oppss, Something went wrong', $e->getMessage())->withInput();
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

    public function resetPoint(Request $request)
    {
        try {
            $lists = ListPelanggaran::where('status_period', 'open')->get();
            foreach ($lists as $list) {
                $list->update([
                    'status_period' => 'close',
                    'status' => 'true'
                ]);
            }
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil Reset Point',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Gagal Reset Point',
                'error' => $e->getMessage()
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
            return redirect()->back()->withInput();
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
