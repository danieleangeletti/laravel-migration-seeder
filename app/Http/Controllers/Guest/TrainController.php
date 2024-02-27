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
        $trains = Train::where('date', '=', '2024-02-27')->get();
        return view("trains.index", compact("trains"));
    }
}
