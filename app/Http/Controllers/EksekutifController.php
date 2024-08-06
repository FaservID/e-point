<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class EksekutifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('type', 2)->orderBy('name', 'asc')->get();


            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nip', function ($row) {
                    return '<span>' . $row->nip == null ? '-' : $row->nip . '</span>';
                })
                ->addColumn('name', function ($row) {
                    return '<span>' . $row->name . '</span>';
                })
                ->addColumn('jabatan', function ($row) {
                    return '<span>' . $row->jabatan . '</span>';
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
                ->rawColumns(['nip', 'name', 'email','jabatan', 'jenis_kelamin', 'tanggal_lahir', 'latest'])
                ->toJson();
        }
        return view('pages.master.data-eksekutif.index');
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
        // dd($request->all());
        try {
            $request->validate([
                'nip' => 'nullable',
                'name' => 'required',
                'tempat_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'jabatan' => 'required',
                'tanggal_lahir' => 'required',
                'email' => 'required',
            ]);

            $data = [
                'nip' => $request->nip ?? '-',
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
                'email' => $request->email,
                'jabatan' => $request->jabatan,
                'password' => bcrypt('password'),
                'type' => 2,
                'jenis_kelamin' => $request->jenis_kelamin,
            ];

            User::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');
            return redirect()->route('data-eksekutif.index');
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
                'nip' => 'nullable',
                'name' => 'required',
                'tempat_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'jabatan' => 'required',
                'tanggal_lahir' => 'required',
                'email' => 'required',
            ]);

            $data = [
                'nip' => $request->nip ?? '-',
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'jenis_kelamin' => $request->jenis_kelamin,
            ];

            $user = User::findOrFail($id);
            $user->update($data);
            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('data-eksekutif.index');
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
