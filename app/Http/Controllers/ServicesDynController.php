<?php

namespace App\Http\Controllers;

use App\Models\ServicesDyn;
use Illuminate\Http\Request;

class ServicesDynController extends Controller
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
            'icon' => 'required | min:3 | max:15',
            'titre' => ['required', 'min:3', 'max:15'],
            'para' => ['required', 'min:10', 'max:35']
        ]);

        $store = new ServicesDyn();
        $store->icon = $request->icon; 
        $store->titre = $request->titre; 
        $store->para = $request->para; 
        $store->save();
        return redirect('/backoffice/servicesDyn')->with('message', "Element created.");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesDyn  $servicesDyn
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showServices = ServicesDyn::find($id);
        return view('pages.backoffice.services.servicesDyn', compact('showServices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesDyn  $servicesDyn
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editServices = ServicesDyn::find($id);
        return view('pages.backoffice.services.servicesDyn', compact('editServices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesDyn  $servicesDyn
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = ServicesDyn::find($id);
        $update->icon = $request->icon; 
        $update->titre = $request->titre; 
        $update->para = $request->para; 
        $update->save();
        return redirect('/backoffice/servicesDyn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesDyn  $servicesDyn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $destroy = ServicesDyn::find($id);
        $destroy -> delete();
        return redirect('/backoffice/servicesDyn') ->with('messageDelete', "Element deleted.");
    
    }
}
