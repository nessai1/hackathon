<?php

namespace App\Http\Controllers;


use App\Models\Room;

class PagesController extends Controller
{
    //
    public function index()
    {
    	$rooms = Room::all();
        return view('welcome');
    }
}
