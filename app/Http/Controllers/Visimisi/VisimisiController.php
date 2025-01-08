<?php

namespace App\Http\Controllers\Visimisi;

use App\Models\Visimisi;
use App\Http\Controllers\Controller;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisi = Visimisi::all();

        if($visimisi){
            $visi = $visimisi->visi;
            $misi = $visimisi->misi;
            $visimisiImg = $visimisi->image;
        } else{
            $visi = "No Data Available";
            $misi = "No Data Available";
            $visimisiImg = [];
        }

        return view('visimisi', compact('visi','misi','visimisiImg'));
    }
}