<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mobil extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    /**
     * Get the merekMobil that owns the Mobil
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function merekMobil(): BelongsTo
    {
        return $this->belongsTo(BrandMobil::class, 'merek_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_mobil'
            ]
        ];
    }
}
