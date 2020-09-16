<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $home = [
            'title' => 'Hello and welcome to your first Inertia app!'
        ];

        return Inertia::render('Home', [
            'home' => $home
        ]);
    }
}
