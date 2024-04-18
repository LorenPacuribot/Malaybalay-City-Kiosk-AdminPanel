<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentaryRequirement extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'documentary_requirements';
    protected $fillable = [
        'service_id',
        'documentary_requirement',
        'where_to_secure',

    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }


}
