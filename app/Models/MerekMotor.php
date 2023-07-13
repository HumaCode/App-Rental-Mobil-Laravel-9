<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MerekMotor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function motor()
    {
        return $this->hasMany(Motor::class, 'merek_motor_id', 'id');
    }
}
