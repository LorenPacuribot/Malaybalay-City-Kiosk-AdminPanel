<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'services';
    protected $fillable = [
        'office_id',
        'name',
        'description_of_service',
        'office_and_division',
        'classification',
        'type_of_transaction',
        'who_may_avail',
        'total_processing_time',
        'total_fees',
        'period_of_extension',
    ];

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

    public function documentaryRequirements(): HasMany
    {
        return $this->hasMany(DocumentaryRequirement::class);
    }

    public function clientActions(): HasMany
    {
        return $this->hasMany(ClientAction::class);
    }
    public function agencyActions(): HasMany
    {
        return $this->hasMany(AgencyAction::class);
    }

}
