<?php

namespace App\Http\Controllers;
use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin()
    {
        return view('Backend.adminmaster');
    }

    public function adminpage()
    {
        return view('Backend.adminpage');
    }

    public function create()
    {
        
        return view('Backend.view.create');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageData = file_get_contents($request->file('image')->getRealPath());
       
        
        

        Gallery::create([
            'image' => $request->image
        ]);

        
        

        return redirect()->route('admin.gallery');
    }

    public function admingallery (){
        $galleries=Gallery::all();
        return view('Backend.view.galleryview',['galleries'=>$galleries],compact('galleries'));
    }
}
