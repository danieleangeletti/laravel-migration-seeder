<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    // This controller show all the data regarding the 'trains' table
    public function index()
    {
        return view("trains.index");
    }
}
