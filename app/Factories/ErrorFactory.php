<?php

declare(strict_types=1);

namespace App\Factories;

use Illuminate\Http\Request;
use Throwable;

final class ErrorFactory
{

    public static function create(Throwable $exception, Request $request)
    {
        $status = $exception->getCode() ?: 500;
        $apiError = [
            'title' => 'An error occurred',
            'detail' => $exception->getMessage(),
            'instance' => $request->url(),
            'status' => $status,
            'type' => 'https://example.com/docs/errors/' . $status
        ];

        return response()->json($apiError, $status);
    }
}
