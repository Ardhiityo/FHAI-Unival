<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\HeroSection;
use App\Models\NewsSection;
use App\Models\ServiceSection;
use App\Models\StatisticSection;
use App\Models\StudyProgramSection;

class HomeController extends Controller
{
    public function index()
    {
        $statistic_sections = StatisticSection::orderBy('id', 'desc')->take(3)->get();
        $hero_sections = HeroSection::orderBy('id', 'desc')->take(1)->get();
        $study_program = StudyProgramSection::all();
        $services = ServiceSection::all();
        $contacts = Contact::orderBy('id', 'desc')->take(1)->get();
        $visions = Contact::orderBy('id', 'desc')->take(1)->get();
        $missions = Contact::orderBy('id', 'desc')->take(5)->get();
        $news = NewsSection::orderBy('date', 'desc')->paginate(12);

        return view('welcome', compact(
            'statistic_sections',
            'hero_sections',
            'study_program',
            'services',
            'contacts',
            'visions',
            'missions',
            'news'
        ));
    }
}
