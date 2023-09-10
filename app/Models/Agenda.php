<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agenda extends Model
{
    use HasFactory;
    /**
     * @return BelongsTo
     */
    public function attendee(): BelongsTo {
        return $this->belongsTo(Attendee::class);
    }

    public function agendaSlots(): HasMany {
        return $this->hasMany(AgendaSlots::class);
    }
}
