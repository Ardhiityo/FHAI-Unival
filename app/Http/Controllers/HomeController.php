<?php

namespace App\Http\Controllers;

use App\Models\StatisticSection;

class HomeController extends Controller
{
    public function index()
    {
        $statistic_sections = StatisticSection::orderBy('id', 'desc')->take(3);

        return view('welcome', compact('statistic_sections'));
    }
}
