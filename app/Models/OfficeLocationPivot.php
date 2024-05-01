<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeLocationPivot extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'office_location_pivots';
    protected $fillable = [
        'location_id',
        'office_id',
    ];


    protected static function boot()
    {
        parent::boot();

        // Listen for the saved event on the OfficeLocationPivot model
        static::saved(function ($pivot) {
            // Retrieve the related Office model
            $office = Office::find($pivot->office_id);
            if ($office) {
                // Update the related Office model's location_id
                $office->update(['location_id' => $pivot->location_id]);
            }
        });
    }
}
