<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ManajemenUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nip', function ($row) {
                    return '<span>' . $row->nip . '</span>';
                })
                ->addColumn('name', function ($row) {
                    $kelasInfo = $row->kelas_id == null ? '' : '<br><small class="fw-bold fst-italic badge bg-primary">Wali Kelas ' . $row->kelas?->nama_kelas . '</small>';
                    return '<span>' . ucWords($row->name) . $kelasInfo . '</span>';
                })
                ->addColumn('email', function ($row) {
                    return '<span>' . $row->email . '</span>';
                })
                ->addColumn('is_guru_bk', function ($row) {
                    return '<span>' . ucWords($row->is_guru_bk) . '</span>';
                })
                ->addColumn('jenis_kelamin', function ($row) {
                    return '<span>' . ucWords($row->jenis_kelamin) . '</span>';
                })
                ->addColumn('tanggal_lahir', function ($row) {
                    return '<span>' . $row->tempat_lahir . '<br>' . Carbon::parse($row->tanggal_lahir)->format('d F Y') . '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d-m-Y, H:i A') . '</span>';
                })
                ->rawColumns(['nip', 'name', 'email', 'is_guru_bk', 'jenis_kelamin', 'tanggal_lahir', 'latest'])
                ->toJson();
        }
        $kelas = Kelas::all();
        return view('admin.manajemen-user.index', compact('kelas'));
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
            // dd($request->all());
            $request->validate([
                'nip' => 'required',
                'name' => 'required',
                'tempat_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'email' => 'required',
                // 'kelas_id' => 'required',
                'is_guru_bk' => 'required',
                'type' => 'required',
            ]);

            $data = [
                'nip' => $request->nip,
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
                'email' => $request->email,
                // 'kelas_id' => $request->kelas_id,
                'password' => bcrypt('password'),
                'type' => $request->type,
                'is_guru_bk' => $request->is_guru_bk,
                'jenis_kelamin' => $request->jenis_kelamin,
            ];

            // $users = User::where('type', 0)->where('is_guru_bk', 'false')->pluck('kelas_id')->toArray(); // Mendapatkan semua kelas_id dari pengguna lain
            // // dd($user, $users);
            // if (in_array($request->kelas_id, $users)) {
            //     Alert::error('Gagal', 'Kelas telah terdaftar di guru lain');
            //     return redirect()->route('manajemen-user.index');
            // } else {
            User::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');
            return redirect()->route('manajemen-user.index');
            // }

            return redirect()->route('manajemen-user.index');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
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
                'is_guru_bk' => 'required',
                'type' => 'required',
            ]);


            $data = [
                'nip' => $request->nip,
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
                'email' => $request->email,
                // 'kelas_id' => $request->kelas_id,
                'jenis_kelamin' => $request->jenis_kelamin,
                'is_guru_bk' => $request->is_guru_bk,
                'type' => $request->type,

            ];

            $user = User::findOrFail($id);
            // $users = User::where('type', 0)->where('is_guru_bk', 'false')->pluck('kelas_id')->toArray(); // Mendapatkan semua kelas_id dari pengguna lain
            // // dd($user, $users);
            // if (in_array($user->kelas_id, $users)) {
            //     Alert::error('Gagal', 'Kelas telah terdaftar di guru lain');
            //     return redirect()->route('manajemen-user.index');
            // } else {
            $user->update($data);
            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('manajemen-user.index');
            // }
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
