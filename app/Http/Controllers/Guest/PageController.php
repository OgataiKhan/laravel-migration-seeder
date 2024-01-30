<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->startOfDay();
        $trains = Train::where('departure_time', '>=', $currentDate)->get();

        return view('welcome', compact('trains'));
    }
}