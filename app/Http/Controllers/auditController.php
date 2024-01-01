<?php

namespace App\Http\Controllers;
use App\Models\Audit;

use Illuminate\Http\Request;

class auditController extends Controller
{
    public function audit()
    {
        return view('Backend.Audit.auditcreate');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageData = file_get_contents($request->file('image')->getRealPath());
        $maxLength = 16777215;

        if (strlen($imageData) > $maxLength) {
            $imageData = substr($imageData, 0, $maxLength);
        }
       
        
        

        Audit::create([
            'image' => $imageData
        ]);

        
        

        return redirect()->route('audit.list');
    }

    public function auditlist (){
        $audits=Audit::all();
        return view('Backend.Audit.auditlist',['audits'=>$audits],compact('audits'));
    }
}
