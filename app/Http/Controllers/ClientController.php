<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use \App\client;

class ClientController extends Controller
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
        return view('client.tambahClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:5000|mimes:png,jpg,jpeg',
            'clientPosition' => 'required'
        ]);
        $gambar = $request->file('gambar')->getClientOriginalName();
        $gambar = Str::random(15) . "." . explode('.', $gambar)[1];
        $request->file('gambar')->move('storage/img/client', $gambar);
        $tipe = $request->clientPosition;

        $client = new client;
        $client->nama = $gambar;
        $client->tipe = $tipe;
        $client->save();
        return redirect('/dashboard/tambahClient')->with('status', 'Client baru berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $client = client::find($request->id);
        Storage::delete('public/img/client/' . $client->nama);
        $client -> delete();
        return redirect('/dashboard/client');
    }
}
