<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Audit;
use App\Models\Product;

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
