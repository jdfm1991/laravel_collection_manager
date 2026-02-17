<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ClientCategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    /**
     * Get the clients for the client category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
