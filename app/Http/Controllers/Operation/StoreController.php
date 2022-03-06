<?php

namespace App\Http\Controllers\Operation;

use App\Http\Requests\Operation\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $this->service->store($request->validated());
        return redirect()->route('operation.index');
    }
}
