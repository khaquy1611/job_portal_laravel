<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'country_id',
        'province_id',
        'created_at',
        'updated_at'
    ];

    public function country(): BelongsTo {
        return $this->belongsTo(Country::class);
    }

    public function province(): BelongsTo {
        return $this->belongsTo(Province::class);
    }
}
