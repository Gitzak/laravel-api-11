<?php

namespace App\Http\Controllers\v1\Services;

use App\Http\Resources\V1\ServiceResource;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;

final class IndexController
{
    public function __invoke()
    {
        // $service = Service::query()->simplePaginate(10);

        $services = QueryBuilder::for(Service::class)
            ->allowedIncludes([
                'checks'
            ])
            ->allowedFilters([
                'url'
            ])
            ->getEloquentBuilder()
            ->simplePaginate(perPage: 10);

        return ServiceResource::collection($services);
    }
}
