<?php

namespace App\Http\Controllers;

use App\Models\Tutorlocation;
use Illuminate\Http\Request;
use DB;

class TutorlocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Tutorlocation::all();
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
        return Tutorlocation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutorlocation  $tutorlocation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Tutorlocation::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutorlocation  $tutorlocation
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorlocation $tutorlocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutorlocation  $tutorlocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorlocation $tutorlocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutorlocation  $tutorlocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorlocation $tutorlocation)
    {
        //
    }

    public function delete(Request $request, $id)
    {
        DB::table('tutorlocation')->where('idTutorLocation', '=', $id)->delete();
        return 204;
    }
}
