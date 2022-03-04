<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
//        dd($request->validated());
        $user->update($request->validated());
        return redirect()->route('settings');
    }
}
