<?php


namespace App\Services\Operation;


use App\Models\Account;
use App\Models\Operation;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function store($data) {
        $data['user_id'] = Auth::id();
        $account = Account::find($data['account_id']);
        if (isset($data['is_income']) && $data['is_income']) {
            $account->balance += $data['amount'];
        } else {
            $account->balance -= $data['amount'];
        }
        Operation::create($data);
        $account->save();
    }
}
