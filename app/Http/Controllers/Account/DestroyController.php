<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Account $account)
    {
        $account->delete();
        return redirect()->route('account.index');
    }
}
