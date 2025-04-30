<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinasiResource extends JsonResource
{
    public $status;
    public $message;
    public $resourceData;

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
        $this->resourceData = $resource;
    }

    public function toArray(Request $request): array
    {
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resourceData,
        ];
    }
}
