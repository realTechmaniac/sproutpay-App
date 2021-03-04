<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }


    public function redirectPath(){

        return redirect('/company-details');
    }
    
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'first_name'              => 'required|string|max:255',
            'last_name'               => 'required|string|max:255',
            'phone_number'            => 'required|unique:users|digits:11',
            'id_type'                 => 'required|string|max:255',
            'id_number'               => 'required|integer',
            'country_of_residence'    => 'required|string|max:255',
            'user_type'               => 'required',
            'email'                   => 'required|string|email|max:255|unique:users',
            'password'                => 'required|string|confirmed|min:8',

        ]);

       
        Auth::login($user = User::create([
            'first_name'           => $request->first_name,
            'last_name'            => $request->last_name,
            'phone_number'         => $request->phone_number,
            'id_type'              => $request->id_type,
            'id_number'            => $request->id_number,
            'country_of_residence' => $request->country_of_residence,
            'user_type'            => $request->user_type,
            'email'                => $request->email, 
            'password'             => Hash::make($request->password),
            
        ]));

        event(new Registered($user));

        return ($this->redirectPath());
    }
}
