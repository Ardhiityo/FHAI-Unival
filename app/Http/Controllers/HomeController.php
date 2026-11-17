<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\HeroSection;
use App\Models\Mission;
use App\Models\NewsSection;
use App\Models\ServiceSection;
use App\Models\StatisticSection;
use App\Models\StudyProgramSection;
use App\Models\Vision;

class HomeController extends Controller
{
    public function index()
    {
        $statistic_sections = StatisticSection::orderBy('id', 'desc')->take(3)->get();
        $hero_sections = HeroSection::orderBy('id', 'desc')->take(1)->get();
        $study_programs = StudyProgramSection::all();
        $services = ServiceSection::all();
        $contacts = Contact::orderBy('id', 'desc')->take(1)->get();
        $visions = Vision::orderBy('id', 'desc')->take(1)->get();
        $missions = Mission::orderBy('id', 'desc')->take(5)->get();
        $news = NewsSection::orderBy('date', 'desc')->paginate(12);

        return view('welcome', compact(
            'statistic_sections',
            'hero_sections',
            'study_programs',
            'services',
            'contacts',
            'visions',
            'missions',
            'news'
        ));
    }
}
