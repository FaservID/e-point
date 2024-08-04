<?php

namespace App\Http\Controllers;

use App\Models\ListPelanggaran;
use App\Models\Student;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function tracking(Request $request)
    {
        if ($request->ajax()) {
            // dd($request->all());
            $nisn = $request->input('nisn');
            $pelanggaran = ListPelanggaran::with('student','kategori')->whereHas('student', function ($query) use ($nisn) {
                $query->where('nisn', $nisn);
            })->get();

            $student = Student::with('kelas')->where('nisn', $nisn)->first();

            return response()->json([
                'status' => 200,
                'message' => 'Fetched Successfully',
                'data' => $pelanggaran,
                'student' => $student
            ]);
        }

        return response()->json([
            'status' => 400,
            'message' => 'Invalid request'
        ]);
    }
}
