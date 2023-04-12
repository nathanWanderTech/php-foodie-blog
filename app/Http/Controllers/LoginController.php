<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SignupRequest;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('');
        }
        return redirect()->route('login', ['error' => 'Incorrect email or password']);
    }

    public function signup(SignupRequest $request)
    {
            try {
                $formData = $request->all();
                $foundUser = User::where('email', $formData['email'])->first();

                if($foundUser) {
                    return redirect()->route('signup', ['error' => 'Email existed']);
                }

                $user = User::create([
                    'name' => trim($formData['name']),
                    'email' => trim($formData['email']),
                    'password' => Hash::make($formData['password'])
                ]);
                Auth::login($user);
                return redirect('');
            } catch (\Exception $e) {
                return redirect()->route('signup', ['error' => 'Something went wrong!']);
            }
    }
}
