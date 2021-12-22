<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;

class RegisterStoreController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $data = $request->all(['name', 'email', 'password']);
        $data['password'] = bcrypt($request->get('password'));

        User::create($data);

        return Redirect::route('site.home')->with('success', 'Usuário Criado com Sucesso!');
    }
}
