<?php

namespace App\Http\Resources\V1;

use App\Models\Service;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;
use TiMacDonald\JsonApi\Link;

/**
 * @property Service $resource
 */
final class ServiceResource extends JsonApiResource
{
    public function toAttributes(Request $request)
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'url' => $this->resource->url,
            'created' => new DateResource(
                $this->resource->created_at
            )
        ];
    }

    public function toLinks(Request $request)
    {
        return [
            Link::self(route('v1:services:index', $this->resource)),
        ];
    }

    public function toRelationships(Request $request)
    {
        return [
            'checks' => fn() => CheckResource::collection(
                $this->whenLoaded('checks'),
            )
        ];
    }
}
