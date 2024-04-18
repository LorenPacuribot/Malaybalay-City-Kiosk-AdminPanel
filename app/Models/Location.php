<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'locations';
    protected $fillable = [
        'name',
        'floor',
        'x',
        'y',
        'z',
    ];

    public function offices(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

    // public function offices(): HasMany
    // {
    //     return $this->hasMany(Office::class);
    // }


}
