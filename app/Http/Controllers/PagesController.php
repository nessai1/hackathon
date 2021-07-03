<?php

namespace App\Http\Controllers;


use App\Models\Room;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
}
