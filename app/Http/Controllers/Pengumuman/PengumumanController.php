<?php

namespace App\Http\Controllers\Pengumuman;

use App\Models\Announcement;
use App\Http\Controllers\Controller;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Announcement::all();
        return view('pengumuman.index', compact('pengumuman'));
    }

    public function show($slug){
        $pengumuman = Announcement::where('slug', $slug)->firstOrFail();
        return view('pengumuman.show', compact('pengumuman'));
    }
}