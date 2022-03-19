<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Operation $operation)
    {
        $accounts = Auth::user()->accounts()->get();
        return view('operation.edit', [
            'operation' => $operation,
            'accounts' => $accounts
        ]);
    }
}
