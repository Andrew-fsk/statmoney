<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Account $account)
    {
        return view('account.edit', [
            'account' => $account
        ]);
    }
}
