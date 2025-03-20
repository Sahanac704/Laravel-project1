<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function profile(Request $request): View
    {
        return view('admin.profile', [
            'user' => $request->user(),
        ]);
    }

    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $request-> user()->fill($request->validated());
        $request->user()->save();
        return redirect(route('admin.profile.update'));
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect(route('login'));
    }

}
