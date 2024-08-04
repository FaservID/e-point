<?php

namespace App\Http\Controllers;

use App\Models\JenisSanksi;
use App\Models\Kelas;
use App\Models\ListPelanggaran;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $kelas = Kelas::all();
        $jenis = JenisSanksi::all();
        return view('reports.index', compact('students', 'kelas'));
    }

    public function export(Request $request)
    {
        // dd($request->all());
        // Retrieve the date range from the request
        $date_range = $request->daterange;
        // Split the date range into start and end dates
        list($start, $end) = explode(' - ', $date_range);

        // Convert the dates to the desired format (Y-m-d)
        $startDate = Carbon::createFromFormat('m/d/Y', $start)->format('Y-m-d');
        $endDate = Carbon::createFromFormat('m/d/Y', $end)->format('Y-m-d');

        // Initialize the query to fetch students with violations within the specified date range
        $query = Student::whereHas('pelanggarans', function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
        });
        // dd($query->get());

        // Apply additional filters if provided
        if ($request->has('student_id') && !empty($request->student_id)) {
            $query->where('id', $request->student_id);
        }

        if ($request->has('kelas_id') && !empty($request->kelas_id)) {
            $query->where('kelas_id', $request->kelas_id);
        }


        // Execute the query and get the results
        $data = [];
        $data['data'] = $query->get();
        $data['jenis'] = JenisSanksi::orderBy('total_poin','desc')->get();

        // dd($data);
        // Check if data exists
        if ($data['data']->isEmpty()) {
            Alert::error('Gagal', 'Tidak ada laporan pada range tanggal tersebut');
            return redirect()->back();
        }

        // Generate the PDF
        $pdf = Pdf::loadView('reports.list-pelanggaran', ['data' => $data]);

        // dd($pdf);
        // Download the PDF file
        return $pdf->download('List_Pelanggaran.pdf');
    }
}
