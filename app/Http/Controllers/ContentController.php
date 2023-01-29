<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $title = 'content Form';
        return view('admin.content.form', compact('title', 'content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
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
            $folderImage = public_path('images');

            //request dari form
            $foto = $request->file('image');

            //ambil extensi file
            $extensionFile = $foto->getClientOriginalExtension();

            //mengganti nama file & pindahkan ke folder
            $nama_foto = 'images/' . time() . 'IMG.' . $extensionFile;
            $foto->move($folderImage, $nama_foto);
        }

        if($request->input('content') == null){
            $content = null;
        }else{
            $content = $request->input('content');
        }



        Content::where('id', '=', $id)->update([

            'image'         => $nama_foto,
            'content'       => $content,
        ]);

        return redirect('dashboard')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
