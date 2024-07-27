<?php

namespace App\Http\Controllers;

use App\Models\JenisSanksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class JenisSanksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = JenisSanksi::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('total', function ($row) {
                    return '<span>' . $row->total_poin . ' Point</span>';
                })
                ->addColumn('tindakan', function ($row) {
                    return '<span>' . $row->tindakan_sanksi . '</span>';
                })
                ->addColumn('latest', function ($row) {
                    return '<span>' . Carbon::parse($row->updated_at)->format('d F Y') . '</span>';
                })
                ->rawColumns(['total', 'tindakan', 'latest'])
                ->toJson();
        }

        return view('admin.jenis-sanksi.index');
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
                'total_poin' => 'required',
                'tindakan_sanksi' => 'required',
            ]);

            JenisSanksi::create($request->all());
            Alert::success('Yeay🥳', 'Berhasil Menyimpan Data');

            return redirect()->route('jenis-sanksi.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());

            return redirect()->back()->withErrors('Oppss, Something went wrong', $e->getMessage());
        }
    }

    public function getData(Request $request, $id)
    {
        // dd('anjeng');
        if ($request->ajax()) {
            $data = JenisSanksi::findOrFail($id);
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
    public function show(JenisSanksi $jenisSanksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisSanksi $jenisSanksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisSanksi $jenisSanksi)
    {
        try {
            $request->validate([
                'total_poin' => 'required',
                'tindakan_sanksi' => 'required',
            ]);

            $jenisSanksi->update($request->all());

            Alert::success('Yeay🥳', 'Berhasil Memperbarui Data');
            return redirect()->route('jenis-sanksi.index');
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisSanksi $jenisSanksi)
    {
        try {
            $jenisSanksi->delete();
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
