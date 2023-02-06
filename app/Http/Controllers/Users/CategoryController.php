<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    // Return [GET] : Categories List
    public function list(): Response
    {
        return Inertia::render('Users/Categories/ListCategories');
    }
}
