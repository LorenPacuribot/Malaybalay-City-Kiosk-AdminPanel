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

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    // public function locations(): HasMany
    // {
    //     return $this->hasMany(Location::class);
    // }

    // Accessor to retrieve the name of the location
    public function getLocationNameAttribute()
    {
        // Check if the location relationship is loaded
        if ($this->relationLoaded('location')) {
            return $this->location->name;
        } else {
            // If not loaded, retrieve the location using lazy loading
            return $this->location()->value('name');
        }
    }


    public static function boot()
    {
        parent::boot();

         // Listen for the created event on the Office model
        static::created(function ($office) {
        // Create a new record in the OfficeLocationPivot table
        OfficeLocationPivot::create([
            'office_id' => $office->id,
            'location_id' => $office->location_id,
        ]);
         });

        // Listen for the saved event on the Office model
        static::saved(function ($office) {
            // Update the location_id in OfficeLocationPivot records
            OfficeLocationPivot::where('office_id', $office->id)
                ->update(['location_id' => $office->location_id]);
        });
    }



}
