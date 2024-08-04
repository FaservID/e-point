<?php

namespace App\Http\Controllers;

use App\Models\HariBelajar;
use App\Models\Kelas;
use App\Models\ListPelanggaran;
use App\Models\MataPelajaran;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $guru = User::where('type', 0)->count();
        $siswa = Student::count();
        $kelas = Kelas::count();
        $pelanggaran = ListPelanggaran::count();
        $top_students = ListPelanggaran::select('student_id', DB::raw('SUM(kategori_pelanggarans.poin) as total_points'))
            ->join('kategori_pelanggarans', 'kategori_pelanggarans.id', '=', 'list_pelanggarans.kategori_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('student_id')
            ->orderBy('total_points', 'DESC')
            ->limit(5) // Ambil hanya 5 siswa teratas
            ->get();

        $top_pelanggaran = ListPelanggaran::select('kategori_id', DB::raw('COUNT(kategori_id) as jumlah_pelanggaran'))
            ->join('kategori_pelanggarans', 'kategori_pelanggarans.id', '=', 'list_pelanggarans.kategori_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('kategori_id')
            ->orderBy('jumlah_pelanggaran', 'DESC')
            ->limit(5) // Ambil hanya 5 siswa teratas
            ->get();

        // dd($top_pelanggaran);

        $charts = ListPelanggaran::select('students.kelas_id', DB::raw('COUNT(students.kelas_id) as jumlah'))
            ->join('students', 'students.id', '=', 'list_pelanggarans.student_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('students.kelas_id')
            ->orderBy('jumlah', 'DESC')
            ->get();
        // dd($charts);
        $classes = [];
        $total = [];
        foreach ($charts as $chart) {
            $class = Kelas::find($chart->kelas_id);

            if ($kelas) {
                $classes[] = $class->nama_kelas;
            } else {
                $classes[] = 'Unknown';
            }

            $total[] = $chart->jumlah;
        }
        // dd($classes, $total);
        $data = [
            'labels' => $classes,
            'data' => $total,
        ];
        return view('guru.index', compact('guru', 'siswa', 'kelas', 'pelanggaran', 'data', 'top_students', 'top_pelanggaran'));
        // return view('guru.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        $guru = User::where('type', 0)->count();
        $siswa = Student::count();
        $kelas = Kelas::count();
        $pelanggaran = ListPelanggaran::count();
        $top_students = ListPelanggaran::select('student_id', DB::raw('SUM(kategori_pelanggarans.poin) as total_points'))
            ->join('kategori_pelanggarans', 'kategori_pelanggarans.id', '=', 'list_pelanggarans.kategori_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('student_id')
            ->orderBy('total_points', 'DESC')
            ->limit(5) // Ambil hanya 5 siswa teratas
            ->get();

        $top_pelanggaran = ListPelanggaran::select('kategori_id', DB::raw('COUNT(kategori_id) as jumlah_pelanggaran'))
            ->join('kategori_pelanggarans', 'kategori_pelanggarans.id', '=', 'list_pelanggarans.kategori_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('kategori_id')
            ->orderBy('jumlah_pelanggaran', 'DESC')
            ->limit(5) // Ambil hanya 5 siswa teratas
            ->get();

        // dd($top_pelanggaran);

        $charts = ListPelanggaran::select('students.kelas_id', DB::raw('COUNT(students.kelas_id) as jumlah'))
            ->join('students', 'students.id', '=', 'list_pelanggarans.student_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('students.kelas_id')
            ->orderBy('jumlah', 'DESC')
            ->get();
        // dd($charts);
        $classes = [];
        $total = [];
        foreach ($charts as $chart) {
            $class = Kelas::find($chart->kelas_id);

            if ($kelas) {
                $classes[] = $class->nama_kelas;
            } else {
                $classes[] = 'Unknown';
            }

            $total[] = $chart->jumlah;
        }
        // dd($classes, $total);
        $data = [
            'labels' => $classes,
            'data' => $total,
        ];
        return view('admin.index', compact('guru', 'siswa', 'kelas', 'pelanggaran', 'data', 'top_students', 'top_pelanggaran'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function eksekutifHome(): View
    {
        $guru = User::where('type', 0)->count();
        $siswa = Student::count();
        $kelas = Kelas::count();
        $pelanggaran = ListPelanggaran::count();
        $top_students = ListPelanggaran::select('student_id', DB::raw('SUM(kategori_pelanggarans.poin) as total_points'))
            ->join('kategori_pelanggarans', 'kategori_pelanggarans.id', '=', 'list_pelanggarans.kategori_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('student_id')
            ->orderBy('total_points', 'DESC')
            ->limit(5) // Ambil hanya 5 siswa teratas
            ->get();

        $top_pelanggaran = ListPelanggaran::select('kategori_id', DB::raw('COUNT(kategori_id) as jumlah_pelanggaran'))
            ->join('kategori_pelanggarans', 'kategori_pelanggarans.id', '=', 'list_pelanggarans.kategori_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('kategori_id')
            ->orderBy('jumlah_pelanggaran', 'DESC')
            ->limit(5) // Ambil hanya 5 siswa teratas
            ->get();

        // dd($top_pelanggaran);

        $charts = ListPelanggaran::select('students.kelas_id', DB::raw('COUNT(students.kelas_id) as jumlah'))
            ->join('students', 'students.id', '=', 'list_pelanggarans.student_id') // Pastikan untuk mengganti dengan nama tabel yang benar
            ->groupBy('students.kelas_id')
            ->orderBy('jumlah', 'DESC')
            ->get();
        // dd($charts);
        $classes = [];
        $total = [];
        foreach ($charts as $chart) {
            $class = Kelas::find($chart->kelas_id);

            if ($kelas) {
                $classes[] = $class->nama_kelas;
            } else {
                $classes[] = 'Unknown';
            }

            $total[] = $chart->jumlah;
        }
        // dd($classes, $total);
        $data = [
            'labels' => $classes,
            'data' => $total,
        ];
        return view('eksekutif.index', compact('guru', 'siswa', 'kelas', 'pelanggaran', 'data', 'top_students', 'top_pelanggaran'));
    }

    public function tracking(Request $request)
    {
        if ($request->ajax()) {
            // dd($request->all());
            $nisn = $request->input('nisn');
            $pelanggaran = ListPelanggaran::whereHas('student', function ($query) use ($nisn) {
                $query->where('nisn', $nisn);
            })->get();

            return response()->json([
                'status' => 200,
                'message' => 'Fetched Successfully',
                'data' => $pelanggaran
            ]);
        }

        return response()->json([
            'status' => 400,
            'message' => 'Invalid request'
        ]);
    }
}
