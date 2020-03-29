<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('templates/albums',compact('albums'));
    }

    public function delete($id){
        Album::find($id)->delete();

        return redirect()->back();
    }

    public function edit($id){
        $album = Album::find($id);
       
        return view('templates.editalbum',compact('album'));
    }

    public function update($id){

        
        $album = Album::find($id);
    
        $album->album_name = request('album_name');
        $album->description = request('description');

        $album->save();

        return redirect()->route('albums');


    }
 }
