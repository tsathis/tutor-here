<?php

namespace App\Http\Controllers;

use App\Models\Tuition;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Tuition::all();
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
        return Tuition::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Tuition::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function edit(Tuition $tuition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tuition $tuition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tuition $tuition)
    {
        //
    }
}
