<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {
        $about = [
            'content' => 'Welcome to the about page! <br/> We are using a <i>v-html</i> tag to render html.'
        ];

        return Inertia::render('About', [
            'about' => $about
        ]);
    }
}
