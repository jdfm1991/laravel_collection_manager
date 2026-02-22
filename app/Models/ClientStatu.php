<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientStatu extends Model
{
    /** @use HasFactory<\Database\Factories\ClientStatuFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all of the clients for the ClientStatu
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
