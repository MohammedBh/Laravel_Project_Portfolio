<?php

namespace App\Http\Controllers;

use App\Models\SkillsDyn;
use Illuminate\Http\Request;

class SkillsDynController extends Controller
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
            'span' => 'required | min:3 | max:15',
            'i' => ['required', 'min:1', 'max:10'],
            'aria' => ['required', 'min:1', 'max:15']
        ]);

        $store = new SkillsDyn();
        $store->span = $request->span; 
        $store->i = $request->i; 
        $store->aria = $request->aria; 
        $store->save();
        return redirect('/backoffice/skillsDyn')->with('message', "Element created.");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillsDyn  $skillsDyn
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillsDynamic  $skillsDynamic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showSkills = SkillsDyn::find($id);
        return view('pages.backoffice.skills.skillsDyn', compact('showSkills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillsDynamic  $skillsDynamic
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editSkills = SkillsDyn::find($id);
        return view('pages.backoffice.skills.skillsDyn', compact('editSkills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillsDyn  $skillsDyn
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = SkillsDyn::find($id);
        $update->span = $request->span; 
        $update->i = $request->i; 
        $update->aria = $request->aria; 
        $update->save();
        return redirect('/backoffice/skillsDyn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillsDynamic  $skillsDynamic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $destroy = SkillsDyn::find($id);
        $destroy -> delete();
        return redirect('/backoffice/skillsDyn') ->with('messageDelete', "Element deleted.");
    
    }
}
