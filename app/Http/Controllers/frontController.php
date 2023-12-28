<?php

namespace App\Http\Controllers;

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
        return view('Front.gallery');
    }

    public function audit()
    {
        return view('Front.audit');
    }

    public function contract()
    {
        return view('Front.contract');
    }

    public function buyer()
    {
        return view('Front.buyer');
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
