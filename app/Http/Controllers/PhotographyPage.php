<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\conceptphoto;
use \App\documentphoto;



class PhotographyPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConceptPhotography = conceptphoto::all();
        $DocumentPhotography = documentphoto::all();
        $ConceptPhotography = $ConceptPhotography->reverse();
        $DocumentPhotography = $DocumentPhotography->reverse();
        return view('photography.index', ['ConceptPhotography' => $ConceptPhotography], ['DocumentPhotography' => $DocumentPhotography]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->table == "concept"){
            return view('photography.tambahConcept');
        }
        elseif ($request->table == "document") {
            return view('photography.tambahDocument');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'gambar' => 'required|max:5000|mimes:png,jpg,jpeg',
            'komentar' => 'required'
        ]);


        if ($request->table == "concept") {
            $gambar = $request->file('gambar')->getClientOriginalName();
            $gambar = Str::random(15) . "." . explode('.', $gambar)[1];
            $request->file('gambar')->move('storage/img/ConceptPhotography', $gambar);
            $komentar = $request->komentar;

            $ConceptPhotography = new conceptphoto;
            $ConceptPhotography->fileName = $gambar;
            $ConceptPhotography->imageComment = $komentar;
            $ConceptPhotography->save();
            return redirect('/dashboard/tambahConcept?table=concept')->with('status', 'Gambar baru berhasil di tambahkan');   
        }
        elseif ($request->table == "document") {
            $gambar = $request->file('gambar')->getClientOriginalName();
            $gambar = Str::random(15) . "." . explode('.', $gambar)[1];
            $request->file('gambar')->move('storage/img/DocumentPhotography', $gambar);
            $komentar = $request->komentar;

            $ConceptPhotography = new documentphoto;
            $ConceptPhotography->fileName = $gambar;
            $ConceptPhotography->imageComment = $komentar;
            $ConceptPhotography->save();
            return redirect('/dashboard/tambahDocument?table=document')->with('status', 'Gambar baru berhasil di tambahkan');   
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

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
        if($request->table == "concept"){
            $ConceptPhotography = conceptphoto::find($request->id);
            Storage::delete('public/img/ConceptPhotography/' . $ConceptPhotography->fileName);
            $ConceptPhotography -> delete();
            return redirect('/dashboard/photography');
        }
        else if($request->table == "document"){
            $DocumentPhotography = documentphoto::find($request->id);
            Storage::delete('public/img/DocumentPhotography/' . $DocumentPhotography->fileName);
            $DocumentPhotography -> delete();
            return redirect('/dashboard/photography');
        }
        else{
            echo 'error(404)';
        }
    }
}
