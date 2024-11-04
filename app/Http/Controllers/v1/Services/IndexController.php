<?php

namespace App\Http\Controllers\v1\Services;

use App\Models\Service;
use Illuminate\Http\JsonResponse;

final class IndexController
{
    public function __invoke()
    {
        return new JsonResponse(
            data: [
                'data' => Service::query()->cursorPaginate(20),
            ],
        );
    }
}
