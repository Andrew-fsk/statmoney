<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $operations = Auth::user()->operation()->get();
        foreach ($operations as &$operation) {
            $operation->account = Account::find($operation->account_id);
        }
        return view('operation.index', [
            'operations' => $operations
        ]);
    }
}
