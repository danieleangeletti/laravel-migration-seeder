<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $today = date("Y-m-d");
        $trains = Train::where('date', '=', $today)->get();
        return view("trains.index", compact("trains"));
    }
}
