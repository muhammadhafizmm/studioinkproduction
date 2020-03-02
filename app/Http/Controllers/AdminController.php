<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('auth.dashbord');
    }
    public function editPhotography()
    {
        $ConceptPhotography = \App\conceptphoto::all();
        $DocumentPhotography = \App\documentphoto::all();
        $ConceptPhotography = $ConceptPhotography->reverse();
        $DocumentPhotography = $DocumentPhotography->reverse();
        return view('photography.photographyControl', ['ConceptPhotography' => $ConceptPhotography], ['DocumentPhotography' => $DocumentPhotography]);
    }
    public function editVideography()
    {   
        $videography = \App\videograp::all();
        $videography = $videography->reverse();
        return view('videography.videographyControl', ['videography'=> $videography]);
    }
    public function editClient()
    {
        $client = \App\client::all();
        $client = $client->reverse();
        return view('client.clientControl', ['client' => $client]);
    }
}
