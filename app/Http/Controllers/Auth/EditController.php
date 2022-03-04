<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke()
    {
        return view('settings', [
            'user' => Auth::user()
        ]);
    }
}
