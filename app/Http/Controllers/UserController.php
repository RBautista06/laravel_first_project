<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    

    public function register(Request  $request) {

        // validation
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', Rule::unique('users', 'name')],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'password'=> ['required', 'min:8']
        ]);

        //encrypting the password before saving it to database you do not need to import bcrypt since it is available globally
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        // saving the user to tghe database
        $user = User::create($incomingFields); // store into a variable what it is going to ereturn
        auth()->login($user); // auth generates a session for login

        return redirect('/');
    }
}
