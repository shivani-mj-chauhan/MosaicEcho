<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Puser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $puser = $request->validate([
            'name' => 'required|string',
            'pusername' => 'required|string|unique:pusername',
            'email' => 'required|email',
            'profile' => 'nullable|image|mimes:jpeg,jpg,png',
            'password' => 'required|confirmed|min:4',
        ]);

        $profileName = null;

        if($request->hasFile(profile)){
            $profile = $request->file('profile');
            $profileName = time().'_'.$request->file('profile')->getClientOriginalName();
            $profile->move(public_path('profiles/'), $profileName);
            $puser['profile'] = $profileName;
        }

        $puser['slug'] = \Str::slug($request->name, '-');

        session(['pending_puser' => $puser]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Puser $puser)
    {
        return view('pusers.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puser $puser)
    {
        return view('pusers.edit');
    
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
