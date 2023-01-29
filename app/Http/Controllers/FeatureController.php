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
        $folderImage = public_path('icons');

        //request dari form
        $foto = $request->file('image');

        //ambil extensi file
        $extensionFile = $foto->getClientOriginalExtension();

        //mengganti nama file & pindahkan ke folder
        $nama_foto = 'icons/' . time() . 'FEATURE.' . $extensionFile;
        $foto->move($folderImage, $nama_foto);

        $feature = Feature::create([
            'title'     => $request->title,
            'image'     => $nama_foto,
            'desc'      => $request->desc,
        ]);

        return redirect()->route('feature')->with(['success' => 'Data Berhasil Disimpan!']);

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
    public function update(Request $request, $id)
    {

        if($request->file('image') == null){
            //request dari form
            $nama_foto = $request->input('imageold');
         } else{
            //request dari form
            $foto = $request->file('image');

            //menentukan folder penyimpanan file
            $folderImage = public_path('icons');

            //request dari form
            $foto = $request->file('image');

            //ambil extensi file
            $extensionFile = $foto->getClientOriginalExtension();

            //mengganti nama file & pindahkan ke folder
            $nama_foto = 'icons/' . time() . 'FEATURE.' . $extensionFile;
            $foto->move($folderImage, $nama_foto);
         }

        Feature::where('id', '=', $id)->update([
            'title'     => $request->title,
            'image'     => $nama_foto,
            'desc'      => $request->desc,
        ]);

        return redirect('feature')->with(['success' => 'Data Berhasil diubah']);
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
