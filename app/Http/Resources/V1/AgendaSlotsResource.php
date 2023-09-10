<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AgendaSlotsResource extends JsonResource
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
            'details' => $this->details,
            'agendaID' => $this->agenda_id,
            'sessionID' => $this->session_id,
            'startTime' => $this->start_time,
            'endTime' => $this->end_time,
            'date' => $this->date,
        ];
    }
}
