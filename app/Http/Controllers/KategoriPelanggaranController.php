<?php

namespace App\Http\Controllers;

use App\Models\JenisSanksi;
use App\Models\KategoriPelanggaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class KategoriPelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = KategoriPelanggaran::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kategori', function ($row) {
                    return '<span>' . $row->kategori_pelanggaran . '</span>';
                })
                ->addColumn('poin', function ($row) {
                    return '<span>' . $row->poin . ' Point </span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y, H:i A') . '</span>';
                })
                ->rawColumns(['kategori', 'poin', 'latest'])
                ->toJson();
        }
        return view('admin.kategori-pelanggaran.index');
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
                'kategori_pelanggaran' => 'required',
                'poin' => 'required',
            ]);

            KategoriPelanggaran::create($request->all());
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');

            return redirect()->route('kategori-pelanggaran.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());

            return redirect()->back()->withErrors('Oppss, Something went wrong', $e->getMessage())->withInput();
        }
    }

    public function getData(Request $request, $id)
    {
        if ($request->ajax()) {
            $data = KategoriPelanggaran::findOrFail($id);
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
    public function show(KategoriPelanggaran $kategoriPelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriPelanggaran $kategoriPelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriPelanggaran $kategoriPelanggaran)
    {
        try {
            $request->validate([
                'kategori_pelanggaran' => 'required',
                'poin' => 'required',
            ]);

            $kategoriPelanggaran->update($request->all());

            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('kategori-pelanggaran.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriPelanggaran $kategoriPelanggaran)
    {
        try {
            $kategoriPelanggaran->delete();
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
