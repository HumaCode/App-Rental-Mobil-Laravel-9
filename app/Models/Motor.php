<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Motor extends Model
{
    use HasFactory;

    /**
     * Get the merekMobil that owns the Mobil
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function merekMotor(): BelongsTo
    {
        return $this->belongsTo(MerekMotor::class, 'merek_motor_id', 'id');
    }
}
