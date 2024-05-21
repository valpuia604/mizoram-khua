<?php

namespace Valpuia\MizoramKhua\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MizoramVillage extends Model
{
    protected $guarded = [];

    public function mizoramDistrict(): BelongsTo
    {
        return $this->belongsTo(MizoramDistrict::class);
    }
}
