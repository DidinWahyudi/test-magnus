<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Features Page';

        $feature = Feature::all();
        return view('admin.feature.index', compact('feature', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Feature Form';
        return view('admin.feature.form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menentukan folder penyimpanan file
        $folderImage = public_path('images/icons');

        //request dari form
        $foto = $request->file('image');

        //ambil extensi file
        $extensionFile = $foto->getClientOriginalExtension();

        //mengganti nama file & pindahkan ke folder
        $nama_foto = 'images/icons' . time() . 'FEATURE.' . $extensionFile;
        $foto->move($folderImage, $nama_foto);

        $feature = Feature::create([
            'division_name' => $request->desc,
            'image'          => $nama_foto,
            'desc'          => $request->desc,
        ]);

        if ($feature) {
            //redirect dengan pesan sukses
            return redirect()->route('feature')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('feature')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(feature $feature)
    {
        $title = 'Feature Form';
        return view('admin.feature.form', compact('title', 'feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $feature = Feature::where('id', $id)->first();
        $feature->delete();
        return redirect('feature')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
