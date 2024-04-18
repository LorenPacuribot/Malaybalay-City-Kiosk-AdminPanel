<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AgencyAction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'agency_actions';
    protected $fillable = [
        'client_action_id',
        'agency_action',
        'fees_to_be_paid',
        'processing_time',
        'person_in_charge',
        'contact_number',
    ];

    public function clientActions(): BelongsTo
    {
        return $this->belongsTo(ClientAction::class);
    }

}
