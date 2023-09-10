<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AgendaSlots extends Model
{
    use HasFactory;

    public function agenda(): BelongsTo {
        return $this->belongsTo(Agenda::class);
    }

    public function session(): HasOne {
        return $this->hasOne(Session::class, 'id', 'session_id');
    }
}
