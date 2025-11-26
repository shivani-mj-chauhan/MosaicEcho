<?php

namespace App\Http\Controllers;

use App\Models\Puser;
use Illuminate\Http\Request;

class PuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('puser.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('puser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pusername' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Puser $puser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puser $puser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puser $puser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puser $puser)
    {
        //
    }
}
