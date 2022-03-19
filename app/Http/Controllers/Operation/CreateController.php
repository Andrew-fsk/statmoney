<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {
        $accounts = Auth::user()->accounts()->get();
        $default_categories = Category::get()->where('user_id', null);
        $user_categories = Auth::user()->categories()->get();
        return view('operation.create', [
            'accounts' => $accounts,
            'categories' => $default_categories->merge($user_categories)
        ]);
    }
}
