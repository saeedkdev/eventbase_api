<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'startTime' => $this->start_time,
            'endTime' => $this->end_time,
            'date' => $this->date,
            'location' => $this->location,
            'speakers' => $this->speakers,
            'sessionType' => $this->session_type,
        ];
    }
}
