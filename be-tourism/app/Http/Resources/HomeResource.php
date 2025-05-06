<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            // Relasi Top Destinasi
            'top_destinasi' => [
                'id' => $this->topDestinasi?->id,
                'nama' => $this->topDestinasi?->nama,
                'deskripsi' => $this->topDestinasi?->deskripsi,
                'gambar' => $this->topDestinasi?->gambar,
                'rating' => $this->topDestinasi?->rating,
            ],

           
        ];
    }
}
