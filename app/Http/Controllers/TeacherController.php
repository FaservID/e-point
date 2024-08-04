<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataGuru;
use App\Http\Requests\UpdateDataGuru;
use App\Models\Kelas;
use App\Models\Teacher;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kelas = Kelas::all();
        if ($request->ajax()) {
            $data = User::where('type', 0)->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nip', function ($row) {
                    return '<span>' . $row->nip . '</span>';
                })
                ->addColumn('name', function ($row) {
                    return '<span>' . $row->name . '</span>';
                })
                ->addColumn('kelas_name', function ($row) {
                    return '<span>' .  $row->kelas?->nama_kelas . '</span>';
                })
                ->addColumn('email', function ($row) {
                    return '<span>' . $row->email . '</span>';
                })
                ->addColumn('jenis_kelamin', function ($row) {
                    return '<span>' . ucWords($row->jenis_kelamin) . '</span>';
                })
                ->addColumn('tanggal_lahir', function ($row) {
                    return '<span>' . $row->tempat_lahir . ', ' . Carbon::parse($row->tanggal_lahir)->format('d F Y') . '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['nip', 'name', 'email', 'jenis_kelamin', 'tanggal_lahir', 'latest', 'kelas_name'])
                ->toJson();
        }
        return view('pages.master.data-guru.index', compact('kelas'));
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
                'nip' => 'required',
                'name' => 'required',
                'tempat_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'email' => 'required',
                'kelas_id' => 'nullable',
            ]);

            $data = [
                'nip' => $request->nip,
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
                'email' => $request->email,
                'password' => bcrypt('password'),
                'type' => 0,
                'jenis_kelamin' => $request->jenis_kelamin,
                'kelas_id' => $request->kelas_id,
            ];

            User::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');
            return redirect()->route('data-guru.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back()->withErrors('Oppss, Something went wrong', $e->getMessage())->withInput();
        }
    }

    public function getData(Request $request, $id)
    {
        if ($request->ajax()) {
            $data = User::findOrFail($id);
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
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
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
                'nip' => 'required',
                'name' => 'required',
                'tempat_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'email' => 'required',
                'kelas_id' => 'required',
            ]);

            $data = [
                'nip' => $request->nip,
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
                'email' => $request->email,
                'jenis_kelamin' => $request->jenis_kelamin,
                'kelas_id' => $request->kelas_id,
            ];

            $user = User::findOrFail($id);
            $user->update($data);
            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('data-guru.index');
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
            User::where('id', $id)->delete();
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
