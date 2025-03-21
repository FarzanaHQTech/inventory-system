<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function userRegistrationPage()
    {
        return view('pages.auth.registration-page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userLoginPage()
    {
        return view('pages.auth.login-page');
    }
    public function ResetPasswordPage()
    {
        return view('pages.auth.reset-pass-page');
    }
    public function sendOtpPage()
    {
        return view('pages.auth.send-otp-page');
    }
    public function varifyOtpPage()
    {
        return view('pages.auth.varify-otp-page');
    }
    public function profilePage()
    {
        return view('pages.dashboard.profile-page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
