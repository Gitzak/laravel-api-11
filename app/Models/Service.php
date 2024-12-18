<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory, HasUlids;


    protected $fillable = [
        'name',
        'url',
        'user_id',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(related: User::class, foreignKey: 'user_id');
    }

    public function checks(): HasMany
    {
        return $this->hasMany(related: Check::class, foreignKey: 'service_id');
    }
}
