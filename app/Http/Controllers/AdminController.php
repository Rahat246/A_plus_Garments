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

    public function store(Request $request)
    {
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        // $image = $request->file('image');
        // $imageData = file_get_contents($image->path());
        // $path = 'uploads/images/' . $image->getClientOriginalName();
        // Storage::disk('public')->put($path, $imageData);

        //$imageData = file_get_contents($request->file('image')->getRealPath());
        $imageData = file_get_contents($request->file('image')->getRealPath());
        // $imageData = file_get_contents($request->file('image')->getRealPath());
        $maxLength = 16777215; // Adjust as needed
        
        if (strlen($imageData) > $maxLength) {
            $imageData = substr($imageData, 0, $maxLength);
        }

        Gallery::create([
            'image' =>$imageData
        ]);

        
        

        return redirect()->route('admin.gallery');
    }

    public function admingallery (){
        $galleries=Gallery::all();
        return view('Backend.view.galleryview',['galleries'=>$galleries],compact('galleries'));
    }

    public function adminDelete($id)
    {
        $galleries=Gallery::find($id);
        if($galleries){
            $galleries->delete();
        }
        return back()->with('success', 'Item deleted successfully');
    
    }

    public function adminEdit($id)
    {
        $galleries=Gallery::find($id);
        return view('Backend.view.galleryedit',compact('galleries'));
    }

    public function adminUpdate(Request $request, $id)
    {
        $galleries=Gallery::find($id);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageData = file_get_contents($request->file('image')->getRealpath());
        $maxLength=16777215;

        if (strlen($imageData) > $maxLength) {
            $imageData = substr($imageData, 0, $maxLength);
        }

        $galleries->update([
            'image'=>$imageData 
        ]);
        return redirect()->route('admin.gallery');

    }
}
