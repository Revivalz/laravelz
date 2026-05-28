<?php

namespace App\Http\Controllers;
use App\Models\Diaries;
use Illuminate\Http\Request;

class DiariesController extends Controller
{
    public function index()
    {
        $diaries = Diaries::all();
        return view("diary.index", compact("diaries"));
    }
            public function show(Diaries $diary) {
        return view("diary.show", compact("diary"));
    }
             
} 
