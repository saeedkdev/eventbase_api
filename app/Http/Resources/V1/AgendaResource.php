<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\AgendaSlotResource;

class AgendaResource extends JsonResource
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
            'attendeeID' => $this->attendee_id,
            'title' => $this->title,
            'agendaSlots' => AgendaSlotResource::collection($this->whenLoaded('agendaSlots')),
        ];
    }
}
