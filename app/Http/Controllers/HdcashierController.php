<?php

namespace App\Http\Controllers;

use App\hdcashier;
use Illuminate\Http\Request;

class HdcashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hdcashier.index');
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
     * @param  \App\hdcashier  $hdcashier
     * @return \Illuminate\Http\Response
     */
    public function show(hdcashier $hdcashier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hdcashier  $hdcashier
     * @return \Illuminate\Http\Response
     */
    public function edit(hdcashier $hdcashier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hdcashier  $hdcashier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hdcashier $hdcashier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hdcashier  $hdcashier
     * @return \Illuminate\Http\Response
     */
    public function destroy(hdcashier $hdcashier)
    {
        //
    }
}
