<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataKelas;
use App\Http\Requests\UpdateDataKelas;
use App\Models\Kelas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kelas::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kelas', function ($row) {
                    return '<span>' . $row->kelas . '</span>';
                })
                ->addColumn('nama_kelas', function ($row) {
                    return '<span>' . $row->nama_kelas . '</span>';
                })
                ->addColumn('jumlah_siswa', function ($row) {
                    return '<span>' . count($row->students) . ' Siswa </span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['kelas', 'nama_kelas', 'jumlah_siswa', 'latest'])
                ->toJson();
        }
        return view('pages.master.data-kelas.index');
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
                'kelas' => 'required',
                'nama_kelas' => 'required',
            ]);

            $data = [
                'kelas' => $request->kelas,
                'nama_kelas' => $request->nama_kelas,
            ];

            Kelas::create($data);
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');

            return redirect()->route('data-kelas.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());

            return redirect()->back()->withErrors('Oppss, Something went wrong', $e->getMessage());
        }
    }

    public function getData(Request $request, $id)
    {
        // dd('anjeng');
        if ($request->ajax()) {
            $data = Kelas::findOrFail($id);
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
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
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
                'kelas' => 'required',
                'nama_kelas' => 'required',
            ]);
            $data = [
                'kelas' => $request->kelas,
                'nama_kelas' => $request->nama_kelas,
            ];

            Kelas::where('id', $id)->update($data);
            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('data-kelas.index');
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
            Kelas::where('id', $id)->delete();
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
