<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Operation $operation)
    {
        $operation->delete();
        return redirect()->route('operation.index');
    }
}
