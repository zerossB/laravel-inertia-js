<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $user = auth()->user()->name ?? "Haynes";
        return Inertia::render('Home', [
            'user' => $user
        ]);
    }
}
