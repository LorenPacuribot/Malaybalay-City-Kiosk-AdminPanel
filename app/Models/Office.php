<?php

namespace App\Models;

use Barryvdh\DomPDF\PDF;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;
    use SoftDeletes;
   

    protected $table = 'offices';
    protected $fillable = [
        'location_id',
        'name',
        'office_hour',
        'contact_information',
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function locations(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    // public function locations(): HasMany
    // {
    //     return $this->hasMany(Location::class);
    // }

}
