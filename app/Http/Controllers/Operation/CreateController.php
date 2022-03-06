<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {
        $accounts = Auth::user()->accounts()->get();
        return view('operation.create', [
            'accounts' => $accounts
        ]);
    }
}
