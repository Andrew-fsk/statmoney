<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Operation\StoreRequest;
use App\Models\Account;
use App\Models\Operation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $account = Account::find($data['account_id']);
        if (isset($data['is_income']) && $data['is_income']) {
            $account->balance += $data['amount'];
        } else {
            $account->balance -= $data['amount'];
        }
        Operation::create($data);
        $account->save();
        return redirect()->route('operation.index');
    }
}
