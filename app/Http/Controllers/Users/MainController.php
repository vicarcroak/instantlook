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
        return Inertia::render('HomePage');
    }

    // Return [GET] : Guidelines
    public function guidelines(): Response
    {
        return Inertia::render('Guidelines');
    }

    // Return [GET] : Dashboard
    public function dashboard(): Response
    {
        return Inertia::render('Dashboard');
    }
}
