<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Audit;
use App\Models\Product;
use App\Models\Contact;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function master()
    {
       return view('Front.master');
    }

    public function frontpage()
    {
        return view('Front.frontpage');
    }

    public function gallery()
    {
        $galleries=Gallery::all();
        return view('Front.gallery',['galleries'=>$galleries],compact('galleries'));
    }

    public function audit()
    {
        $audits=Audit::all();
        return view('Front.audit',['audits'=>$audits],compact('audits'));
    }

    public function contract()
    {
        return view('Front.contract');
    }
    
    public function submit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);
        return redirect()->route('front.contract');
    }

    public function contactlist()
    {
        $contacts=Contact::all();
        return view('Backend.contact.contactview',compact('contacts'));
    }

    public function buyer()
    {
        $Products=Product::all();
        return view('Front.buyer',['Products'=>$Products],compact('Products'));
    }

    public function csr()
    {
        return view('Front.csr');
    }

    public function about()
    {
        return view('Front.about');
    }


}
