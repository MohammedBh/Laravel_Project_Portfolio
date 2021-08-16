<?php

namespace App\Http\Controllers;

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
use App\Models\Welcome;
use Database\Seeders\AboutSeeder;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        $about = About::all();
        $hero = Hero::all();
        $facts = Facts::all();
        $portfolio = Portfolio::all();
        $portfolioDyn = PortfolioDyn::all();
        $services = Services::all();
        $servicesDyn = ServicesDyn::all();
        $skills = Skills::all();
        $skillsDyn = SkillsDyn::all();
        $navbar = Navbar::all();
        return view('welcome', compact('contact', 'about', 'hero', 'facts', 'portfolio', 'portfolioDyn', 'services', 'servicesDyn', 'skills', 'skillsDyn', 'navbar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
