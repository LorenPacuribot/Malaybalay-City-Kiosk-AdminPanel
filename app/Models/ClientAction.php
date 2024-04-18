<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientAction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'client_actions';
    protected $fillable = [
        'service_id',
        'name',
    ];

    public function services(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function agencyActions(): HasMany
    {
        return $this->hasMany(AgencyAction::class);
    }
}
