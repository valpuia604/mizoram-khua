<?php

namespace Valpuia\MizoramKhua\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MizoramDistrict extends Model
{
    protected $guarded = [];

    public function mizoramVillages(): HasMany
    {
        return $this->hasMany(MizoramVillage::class);
    }
}
