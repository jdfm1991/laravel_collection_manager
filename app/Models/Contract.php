<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contract extends Model
{
    /** @use HasFactory<\Database\Factories\ContractFactory> */
    use HasFactory;

    protected $fillable = [
        'number_contract',
        'file_contract',
        'client_id',
        'plan_id',
        'node_id',
        'balance',
        'address',
        'status',
        'user_id',
        'company_id'
    ];

    /**
     * Get the client associated with the contract.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the plan associated with the contract.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Get the node associated with the contract.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function node(): BelongsTo
    {
        return $this->belongsTo(Node::class);
    }

    /**
     * Get the user associated with the contract.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the company associated with the contract.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the collections associated with the contract.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function collections() : HasMany
    {
        return $this->hasMany(Collection::class);
    }
}
