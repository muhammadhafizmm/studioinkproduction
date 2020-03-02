<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \App\videograp;

class VideographyPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $videography = videograp::all();
        $videography = $videography->reverse();
        return view('videography.index', ['videography'=> $videography]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videography.tambahVideo');
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
            'komentar' => 'required',
            'embedlink' => 'required'
        ]);

        $gambar = $request->file('gambar')->getClientOriginalName();
        $gambar = Str::random(15) . "." . explode('.', $gambar)[1];
        $request->file('gambar')->move('storage/img/thumbnail', $gambar);
        $komentar = $request->komentar;
        $link = $request->embedlink;

        $videography = new videograp;
        $videography->thumbnail = $gambar;
        $videography->komentar = $komentar;
        $videography->embedlink = $link;
        $videography->save();
        return redirect('/dashboard/tambahVideo')->with('status', 'Gambar baru berhasil di tambahkan');   
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
        $videography = videograp::find($request->id);
        Storage::delete('public/img/thumbnail/' . $videography->thumbnail);
        $videography -> delete();
        return redirect('/dashboard/videography');
    }
}
