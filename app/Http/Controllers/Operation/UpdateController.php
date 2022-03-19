<?php

namespace App\Http\Controllers\Operation;

use App\Http\Requests\Operation\UpdateRequest;
use App\Models\Operation;

class UpdateController extends BaseController
{
    public function __invoke(Operation $operation, UpdateRequest $request)
    {
        $this->service->update($operation, $request->validated());
        return redirect(route('operation.index'));
    }
}
