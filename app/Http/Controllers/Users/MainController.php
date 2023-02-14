<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class MainController extends Controller
{
    // Return [GET] : HomePage
    public function homePage(): Response
    {
        return Inertia::render('Users/Home/Homepage');
    }

    // Return [GET] : Guidelines
    public function guidelines(): Response
    {
        return Inertia::render('Users/Home/Guidelines');
    }

    // Return [GET] : Dashboard
    public function dashboard(): Response
    {
        return Inertia::render('Users/Home/Dashboard');
    }

    // Return [GET] : Messages
    public function messages(): Response
    {
        return Inertia::render('Users/Home/Messages');
    }

    // Return [GET] : Subscription
    public function subscription(): Response
    {
        return Inertia::render('Users/Home/Subscription');
    }
}
