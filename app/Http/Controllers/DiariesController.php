<?php

namespace App\Http\Controllers;
use App\Models\Diaries;
use Illuminate\Http\Request;

class DiariesController extends Controller
{
    public function index()
    {
        $diaries = diaries::all();
        return view("diary.index", compact("diaries"));
    }
} 
