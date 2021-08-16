<?php

namespace App\Http\Controllers;

use App\Models\PortfolioDyn;
use Illuminate\Http\Request;

class PortfolioDynController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        request()->validate([
            'img_portfolio' => 'required | min:3 | max:15',
            'icon1' => ['required', 'min:3', 'max:15'],
            'icon2' => ['required', 'min:5', 'max:15']
        ]);

        $store = new PortfolioDyn();
        $store->img_portfolio = $request->img_portfolio;
        $store->icon1 = $request->icon1;
        $store->icon2 = $request->icon2; 
        $store->save();
        return redirect('/backoffice/portfolio-dyn')->with('message', "Element created.");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioDyn  $portfolioDyn
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showPortfolio = PortfolioDyn::find($id);
        return view('pages.backoffice.portfolio.portfolioDyn', compact('showPortfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioDyn  $portfolioDyn
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editPortfolio = PortfolioDyn::find($id);
        return view('pages.backoffice.portfolio.portfolioDyn', compact('editPortfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioDyn  $portfolioDyn
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = PortfolioDyn::find($id);
        $update->img_portfolio = $request->img_portfolio; 
        $update->icon1 = $request->icon1; 
        $update->icon2 = $request->icon2; 
        $update->save();
        return redirect('/backoffice/portfolioDyn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioDyn  $portfolioDyn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $destroy = PortfolioDyn::find($id);
        $destroy -> delete();
        return redirect('/backoffice/portfolioDyn') ->with('messageDelete', "Element deleted.");
    }
}
