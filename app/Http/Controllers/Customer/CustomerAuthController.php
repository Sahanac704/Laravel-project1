<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\LoginCustomerRequest;
use App\Http\Requests\Customer\RegisterCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    public function registerPage()
    {
        return view('customer.auth.register');
    }

	 public function loginPage()
    {
        return view('customer.auth.login');
    }

	public function register(RegisterCustomerRequest $request)
    {
        $customer = Customer::create($request->validated());

        return redirect(route('customer.loginPage'));
    }

	public function login(LoginCustomerRequest $request): RedirectResponse
    {
            $request->authenticate();

            $request->session()->regenerate();

            return redirect(route('customer.dashboard'));

    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect(route('customer.loginPage'));
    }



}
