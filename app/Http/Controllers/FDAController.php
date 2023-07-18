<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class FDAController extends Controller
{
    public function home()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\home.php'));
        else
            $array = include(base_path('\resources\lang\mr\home.php'));
        return view('index', compact('array'));
    }

    public function about()
    {
        return view('about');
    }

    public function vision()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\vision.php'));
        else
            $array = include(base_path('\resources\lang\mr\vision.php'));
        return view('vision', compact('array'));
    }

    public function duties()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\duties.php'));
        else
            $array = include(base_path('\resources\lang\mr\duties.php'));
        return view('duties', compact('array'));
    }

    public function laws()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\laws.php'));
        else
            $array = include(base_path('\resources\lang\mr\laws.php'));
        return view('laws', compact('array'));
    }

    public function authorities()
    {
        return view('authorities');
    }

    public function foodAbout()
    {
        return view('foodabout');
    }

    public function foodServices()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\foodServices.php'));
        else
            $array = include(base_path('\resources\lang\mr\foodServices.php'));
        return view('foodservices', compact('array'));
    }

    public function publications()
    {
        return view('publication');
    }

    public function drugAbout()
    {
        return view('drugabout');
    }

    public function drugServices()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\drugServices.php'));
        else
            $array = include(base_path('\resources\lang\mr\drugServices.php'));
        return view('drugservice', compact('array'));
    }

    public function drugDuties()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\drugDuties.php'));
        else
            $array = include(base_path('\resources\lang\mr\drugDuties.php'));
        return view('drugduties', compact('array'));
    }

    public function labAbout()
    {
        return view('lab');
    }

    public function labIntroduction()
    {
        return view('introduction');
    }

    public function labHistory()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\history.php'));
        else
            $array = include(base_path('\resources\lang\mr\history.php'));
        
        return view('history', compact('array'));
    }

    public function labObjectives()
    {
        return view('Objectives');
    }

    public function labStructure()
    {
        return view('Organization');
    }

    public function vigilanceAbout()
    {
        return view('vigilanceabout');
    }

    public function vigilanceComposition()
    {
        return view('vigilancecomposition');
    }

    public function vigilanceDuties()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\vigilanceDuties.php'));
        else
            $array = include(base_path('\resources\lang\mr\vigilanceDuties.php'));
        return view('vigilanceduties', compact('array'));
    }

    public function rti()
    {
        return view('rti');
    }

    public function seniorityList()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\seniorityList.php'));
        else
            $array = include(base_path('\resources\lang\mr\seniorityList.php'));
        return view('seniority_list', compact('array'));
    }

    public function contact()
    {
        if ( Config::get('app.locale') == 'en')
            $array = include(base_path('\resources\lang\en\contact.php'));
        else
            $array = include(base_path('\resources\lang\mr\contact.php'));
        return view('contact', compact('array'));
    }
}
