<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Owenoj\LaravelGetId3\GetId3;
use Illuminate\Support\Facades\Storage;


class SongController extends Controller
{
    public function index(){
        return view('index',[
            'Songs'=>Song::latest()->filter
             (request(['search']))->paginate(8)  
        ]);
    }

    public function create(){
        return view('index',[
            'Songs'=>Song::latest()->filter
             (request(['search']))->paginate(8)  
        ]);
    }

    public function store(Request $request){
        $form = $request->validate([
            'title'=>'required',
            'artist'=>'required',
            'src'=> 'required',
            'cover'=>'required'
            
        ]);
        
        //get all info
        $track = GetId3::fromUploadedFile(request()->file('src'));
        $time = $track -> getPlaytime();
        $fileName = 'audio/' . $request->title . '.' . 'mp3';
        $request->file('src')->move(public_path('audio'), $fileName);

        $cover = 'images/' . $request->title . '.' . 'jpg';
        $request->file('cover')->move(public_path('images'), $cover);

        
        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'src' => $fileName,
            'cover'=>$cover,
            'time'=>$time,
        ]);
        return redirect('/');
   }
}
