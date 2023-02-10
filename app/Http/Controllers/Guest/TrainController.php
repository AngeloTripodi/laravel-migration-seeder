<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('orario_di_partenza', '=', '2023-02-10')->get();
        return view('trains.index', compact('trains'));
    }
}
