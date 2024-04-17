<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use PDO;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function createRegistrationForm()
    {
        return view('auth.register');
    }

public function createAddressForm()
    {
        return view('auth.register-address');
    }

    public function storeRegistration(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone_number' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create($userData);

        // Log in the user
        Auth::login($user);
        // Redirect to the dashboard
        return redirect(route('dashboard', [], false));
    }
}
