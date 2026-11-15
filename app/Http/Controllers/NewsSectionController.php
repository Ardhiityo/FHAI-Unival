<?php

namespace App\Http\Controllers;

use App\Models\NewsSection;
use Illuminate\Contracts\View\View;

class NewsSectionController extends Controller
{
    public function show(NewsSection $newsSection): View
    {
        return view('news-detail', compact('newsSection'));
    }
}
