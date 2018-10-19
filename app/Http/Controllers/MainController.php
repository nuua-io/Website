<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Add an email to the newsletter.
     *
     * @param Request $request
     * @return Response
     */
    public function newsletter(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|string|email|unique:newsletters'
        ]);

        Newsletter::create($attributes);

        return redirect('/')
            ->with('success', "Thank you for your interest in the project, you're in!");
    }
}
