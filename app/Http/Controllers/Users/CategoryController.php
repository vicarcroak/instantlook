<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    // Return [GET] : Categories List
    public function index(): Response
    {
        return Inertia::render('Users/Categories/Index');
    }

    // Return [GET] : Categories Detail
    public function detail($id): Response
    {
        return Inertia::render('Users/Categories/Detail');
    }
}
