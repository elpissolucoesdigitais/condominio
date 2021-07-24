<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Morador;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredMoController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.registermorador');
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
        //$request->validate([
        //    'name' => 'required|string|max:255',
        //    'email' => 'required|string|email|max:255|unique:users',
        //    \'password\' => [\'required\', \'confirmed', Rules\Password::defaults()],
        //]);

        $morador = Morador::create([
            'name' => $request->nome,
            'email' => $request->email,
            'cpf' => $request->cpf,
        ])->givePermissionTo('morador');

        event(new Registered($morador));

        Auth::login($morador);

        return redirect(RouteServiceProvider::HOME);
    }
}
