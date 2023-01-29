<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Destination Page';

        $destination = Destination::all();
        return view('admin.destination.index', compact('destination', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Destination Form';
        return view('admin.destination.form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Destination::create([
            'location' => $request->location,
        ]);

        return redirect('destination')->with(['success' => 'Data Berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        $title = 'Destination Form';
        return view('admin.destination.form', compact('destination', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        Destination::where('id', '=', $id)->update([
            'location' => $request->location,
        ]);
        return redirect('destination')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = Destination::where('id', $id)->first();
        $destination->delete();
        return redirect('destination')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
