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

    public function auditDelete($id)
    {
        $audits=Audit::find($id);
        if($audits){
            $audits->delete();
        }
        return back()->with('success', 'Item deleted successfully');
    }

    public function auditEdit($id)
    {
        $audits=Audit::find($id);
        return view('Backend.Audit.aditedit',compact('audits'));
    }

    public function auditUpdate(Request $request, $id)
    {
        $audits=Audit::find($id);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageData = file_get_contents($request->file('image')->getRealpath());
        $maxLength=16777215;

        if (strlen($imageData) > $maxLength) {
            $imageData = substr($imageData, 0, $maxLength);
        }

        $audits->update([
            'image'=>$imageData 
        ]);
        return redirect()->route('audit.list');

    }
}
