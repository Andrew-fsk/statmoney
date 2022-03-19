<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Operation $operation)
    {
        $default_categories = Category::get()->where('user_id', null);
        $user_categories = Auth::user()->categories()->get();
        return view('operation.edit', [
            'operation' => $operation,
            'accounts' => Auth::user()->accounts()->get(),
            'categories' => $default_categories->merge($user_categories)
        ]);
    }
}
