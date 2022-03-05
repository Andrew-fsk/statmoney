<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\UpdateRequest;
use App\Models\Account;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Account $account, UpdateRequest $request)
    {
        $account->updateOrFail($request->validated());
        return redirect(route('account.index'));
    }
}
