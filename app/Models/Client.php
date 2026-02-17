<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'dni',
        'email',
        'phone',
        'image',
        'client_category_id',
        'user_id',
        'company_id',
        'status',
    ];

    /**
     * Get the client category associated with the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientCategory(): BelongsTo
    {
        return $this->belongsTo(ClientCategory::class);
    }

    /**
     * Get the user associated with the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the company associated with the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the contracts associated with the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    /**
     * Get the collections associated with the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collections(): HasMany
    {
        return $this->hasMany(Collection::class);
    }
}
