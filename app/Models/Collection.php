<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Collection extends Model
{
    /** @use HasFactory<\Database\Factories\CollectionFactory> */
    use HasFactory;

    protected $fillable = [
        'n_collection',
        'description',
        'amount',
        'paid',
        'balance',
        'collection_statu_id',
        'client_id',
        'company_id',
        'node_id',
        'user_id',
        'plan_id',
    ];

    /**
     * Get the collection statu that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collectionStatu(): BelongsTo
    {
        return $this->belongsTo(CollectionStatu::class);
    }

    /**
     * Get the client that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the company that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the node that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function node(): BelongsTo
    {
        return $this->belongsTo(Node::class);
    }

    /**
     * Get the user that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the plan that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Get the payments for the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function payments() : BelongsToMany
    {
        return $this->belongsToMany(Payment::class)->withTimestamps();
    }

    /**
     * Get the contracts for the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function contracts() : BelongsToMany
    {
        return $this->belongsToMany(Contract::class)->withTimestamps();
    }
}
