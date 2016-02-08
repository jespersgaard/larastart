<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;

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
     * Show user profile.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    /**
     * Show us update profile form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update Users Profile
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        $input = Input::except('_method', '_token');

        auth()->user()->profile()->update($input);

        flash()->success('Your profile has successfully been updated.');

        return redirect()->back();
    }

    /**
     * Show edit profile form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editPassword()
    {
        return view('profile.password');
    }

    /**
     * Update authenticated users password.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6'
        ]);

        auth()->user()->update([
            'password' => bcrypt($request->get('password'))
        ]);

        flash()->success('Password changed successfully.');

        return redirect()->back();
    }
}
