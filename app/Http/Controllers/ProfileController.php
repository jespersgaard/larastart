<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use App\User;

class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show us update profile form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $user = auth()->user();

        return view('profile.edit', compact('user'));
    }

    /**
     * Update Users Profile
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EditProfileRequest $request)
    {
        auth()->user()->update($request->all());

        flash()->overlay('Your profile has successfully been updated.','Profile Updated');

        return redirect()->back();
    }
}
