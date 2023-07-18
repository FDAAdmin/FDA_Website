<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FDAController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/aboute', function(){
    return view('aboute');
});
*/

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});


Route::get('/', [FDAController::class, 'home'])->name('home');
Route::get('index', [FDAController::class, 'home'])->name('home');

Route::get('about', [FDAController::class, 'about'])->name('about');
Route::get('vision', [FDAController::class, 'vision'])->name('vision');
Route::get('duties', [FDAController::class, 'duties'])->name('duties');
Route::get('laws', [FDAController::class, 'laws'])->name('laws');
Route::get('authorities', [FDAController::class, 'authorities'])->name('authorities');

Route::get('foodaboute', [FDAController::class, 'foodAbout'])->name('foodAbout');
Route::get('foodservicese', [FDAController::class, 'foodServices'])->name('foodServices');
Route::get('publicatione', [FDAController::class, 'publications'])->name('publications');

Route::get('drugabout', [FDAController::class, 'drugAbout'])->name('drugAbout');
Route::get('drugservice', [FDAController::class, 'drugServices'])->name('drugServices');
Route::get('drugduties', [FDAController::class, 'drugDuties'])->name('drugDuties');

Route::get('lab', [FDAController::class, 'labAbout'])->name('labAbout');
Route::get('introduction', [FDAController::class, 'labIntroduction'])->name('labIntroduction');
Route::get('history', [FDAController::class, 'labHistory'])->name('labHistory');
Route::get('Objectives', [FDAController::class, 'labObjectives'])->name('labObjectives');
Route::get('Organization', [FDAController::class, 'labStructure'])->name('labStructure');

Route::get('vigilanceabout', [FDAController::class, 'vigilanceAbout'])->name('vigilanceAbout');
Route::get('composition', [FDAController::class, 'vigilanceComposition'])->name('vigilanceComposition');
Route::get('vigilanceduties', [FDAController::class, 'vigilanceDuties'])->name('vigilanceDuties');

Route::get('rti', [FDAController::class, 'rti'])->name('rti');
Route::get('seniority_list', [FDAController::class, 'seniorityList'])->name('seniorityList');
Route::get('contact', [FDAController::class, 'contact'])->name('contact');



Route::get('set-language/{language}', [LanguageController::class, 'setLanguage'])->name('setLanguage');



/*
Route::get('index.php', [FDAController::class, 'indexMR'])->name('home');

Route::get('about.php', [FDAController::class, 'aboutMR'])->name('about');
Route::get('importd44.php', [FDAController::class, 'visionMR'])->name('vision');
Route::get('importd33.php', [FDAController::class, 'dutiesMR'])->name('duties');
Route::get('importd22.php', [FDAController::class, 'lawsMR'])->name('laws');
Route::get('authorities.php', [FDAController::class, 'authoritiesMR'])->name('authorities');

Route::get('foodabout.php', [FDAController::class, 'foodAbout'])->name('foodAbout');
Route::get('foodservices.php', [FDAController::class, 'foodServices'])->name('foodServices');
Route::get('publication.php', [FDAController::class, 'publications'])->name('publications');

Route::get('importd1_N1.php', [FDAController::class, 'drugAbout'])->name('drugAbout');
Route::get('services.php', [FDAController::class, 'drugServices'])->name('drugServices');

Route::get('lab.php', [FDAController::class, 'labAbout'])->name('labAbout');
Route::get('introduction.php', [FDAController::class, 'labIntroduction'])->name('labIntroduction');
Route::get('history.php', [FDAController::class, 'labHistory'])->name('labHistory');
Route::get('Objectives.php', [FDAController::class, 'labObjectives'])->name('labObjectives');
Route::get('Organizatione_m.php', [FDAController::class, 'labStructure'])->name('labStructure');

Route::get('importd_N1.php', [FDAController::class, 'vigilanceAbout'])->name('vigilanceAbout');
Route::get('importd_N2.php', [FDAController::class, 'vigilanceStructure'])->name('vigilanceStructure');
Route::get('importd_N3.php', [FDAController::class, 'vigilanceDuties'])->name('vigilanceDuties');

Route::get('coming_soonm.php', [FDAController::class, 'contact'])->name('contact');
Route::get('seniority_list.php', [FDAController::class, 'seniorityList'])->name('seniorityList');
*/