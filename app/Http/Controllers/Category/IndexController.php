<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('category.index', [
            'categories' => Auth::user()->categories()->get(),
            'default_categories' => Category::get()->where('user_id', null)
        ]);
    }
}
