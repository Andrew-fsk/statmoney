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
        isset($data['is_income']) ? $account->balance += $data['amount'] : $account->balance -= $data['amount'];
        $account->save();
        Operation::create($data);
    }

    /**
     * @param Operation $operation
     * @param $new_data
     */
    public function update(Operation $operation, $new_data) {
        $account = Account::find($operation->account_id);
        $operation->is_income ? $account->balance -= $operation->amount : $account->balance += $operation->amount;
        $account->save();

        $new_account = Account::find($new_data['account_id']);
        if (isset($new_data['is_income']) && $new_data['is_income']) {
            $new_account->balance += $new_data['amount'];
        } else {
            $new_account->balance -= $new_data['amount'];
            $operation->is_income = 0;
        }
        $new_account->save();
        $operation->update($new_data);
    }
}
