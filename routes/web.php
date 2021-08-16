<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioDynController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesDynController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SkillsDynController;
use App\Http\Controllers\WelcomeController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Facts;
use App\Models\Hero;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\PortfolioDyn;
use App\Models\Services;
use App\Models\ServicesDyn;
use App\Models\Skills;
use App\Models\SkillsDyn;
use Database\Seeders\AboutSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome')->name('welcome');

Route::get('/backoffice/home', [BackofficeController::class, 'index'])->name('backoffice');

// Navbar - Static
Route::get('/backoffice/navbar', function(){
    $navbars= Navbar::all();
    return view('pages.backoffice.navbar.navbarBackoffice', compact('navbars'));
})->name('navbar');

Route::get('/backoffice/navbar/{id}/edit', [NavbarController::class, 'edit']);
Route::put('/backoffice/navbar/{id}/update', [NavbarController::class, 'update']);

// Hero - Static
Route::get('/backoffice/hero', function () {
    $heros = Hero::all();
    return view('pages.backoffice.hero.heroBackoffice', compact('heros'));
})->name('hero');

Route::get('/backoffice/hero/{id}/edit', [HeroController::class, 'edit']);
Route::get('/backoffice/hero/{id}/update', [HeroController::class, 'update']);

// About - Static
Route::get('/backoffice/about', function () {
    $abouts = About::all();
    return view('pages.backoffice.about.aboutBackoffice', compact('abouts'));
})->name('about');

Route::get('/backoffice/about/{id}/edit', [AboutController::class, 'edit']);
Route::put('/backoffice/about/{id}/update', [AboutController::class, 'update']);

//Contact - Static
Route::get('/backoffice/contact', function () {
    $contacts = Contact::all();
    return view('pages.backoffice.contact.contactBackoffice', compact('contacts'));
})->name('contact');

Route::get('/contact/{id}/edit', [ContactController::class, 'edit']);
Route::put('/contact/{id}/update', [ContactController::class, 'update']);

// Facts - Static
Route::get('/backoffice/facts', function(){
    $factss= Facts::all();
    return view('pages.backoffice.facts.factsBackoffice', compact('factss'));
})->name('facts');

Route::get('/backoffice/facts/{id}/edit', [FactsController::class, 'edit']);
Route::put('/backoffice/facts/{id}/update', [FactsController::class, 'update']);

// Skills - Static
Route::get('/backoffice/skills', function(){
    $skillss= Skills::all();
    return view('pages.backoffice.skills.skillsBackoffice', compact('skillss'));
})->name('skills');

Route::get('/backoffice/skills/{id}/edit', [SkillsController::class, 'edit']);
Route::put('/backoffice/skills/{id}/update', [SkillsController::class, 'update']);

// Skills - Dynamic
Route::get('/backoffice/skillsDyn', function(){
    $skillsDyns = SkillsDyn::all();
    return view('pages.backoffice.skills.skillsDyn', compact('skillsDyns'));
})->name('skillsDyn');

Route::get('/backoffice/skills/{id}/show', [SkillsDynController::class, 'show']);
Route::get('/backoffice/skillsDync/{id}/edit', [SkillsDynController::class, 'edit']);
Route::put('/backoffice/skillsDync/{id}/update', [SkillsDynController::class, 'update']);
Route::post('/backoffice/formSkills', [SkillsDynController::class, 'store']);
Route::delete('/backoffice/skillsDeletec/{id}', [SkillsDynController::class, 'destroy']);

// Portfolio - Static
Route::get('/backoffice/portfolio', function(){
    $portfolios= Portfolio::all();
    return view('pages.backoffice.portfolio.portfolioBackoffice', compact('portfolios'));
})->name('portfolio');

Route::get('/backoffice/portfolio/{id}/edit', [PortfolioController::class, 'edit']);
Route::put('/backoffice/portfolio/{id}/update', [PortfolioController::class, 'update']);

// Portfolio - Dynamic
Route::get('/backoffice/portfolioDyn', function(){
    $portfolioDyns = PortfolioDyn::all();
    return view('pages.backoffice.portfolio.portfolioDyn', compact('portfolioDyns'));
})->name('portfolioDyn');

Route::get('/backoffice/portfolio/{id}/show', [PortfolioDynController::class, 'show']);
Route::get('/backoffice/PortfolioDync/{id}/edit', [PortfolioDynController::class, 'edit']);
Route::put('/backoffice/PortfolioDync/{id}/update', [PortfolioDynController::class, 'update']);
Route::post('/backoffice/formPortfolio', [PortfolioDynController::class, 'store']);
Route::delete('/backoffice/PortfolioDeletec/{id}', [PortfolioDynController::class, 'destroy']);

// SServices - Static
Route::get('/backoffice/services', function(){
    $services= Services::all();
    return view('pages.backoffice.services.servicesBackoffice', compact('services'));
})->name('services');

Route::get('/backoffice/services/{id}/edit', [ServicesController::class, 'edit']);
Route::put('/backoffice/services/{id}/update', [ServicesController::class, 'update']);


// services - Dynamic
Route::get('/backoffice/servicesDyn', function(){
    $servicesDyn = ServicesDyn::all();
    return view('pages.backoffice.services.servicesDyn', compact('servicesDyn'));
})->name('servicesDyn');

Route::get('/backoffice/services/{id}/show', [ServicesDynController::class, 'show']);
Route::get('/backoffice/ServicesDync/{id}/edit', [ServicesDynController::class, 'edit']);
Route::put('/backoffice/ServicesDync/{id}/update', [ServicesDynController::class, 'update']);
Route::post('/backoffice/formServices', [ServicesDynController::class, 'store']);
Route::delete('/backoffice/ServicesDeletec/{id}', [ServicesDynController::class, 'destroy']);