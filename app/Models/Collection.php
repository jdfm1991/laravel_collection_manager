<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Collection extends Model
{
    /** @use HasFactory<\Database\Factories\CollectionFactory> */
    use HasFactory;

    protected $fillable = [
        'number_collection',
        'description',
        'amount',
        'amount_paid',
        'client_id',
        'contract_id',
        'plan_id',
        'node_id',
        'status',
        'user_id',
        'company_id'
    ];
    /**
     * Get the client associated with the collection.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the contract associated with the collection.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contract() : BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }

    /**
     * Get the client associated with the collection.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan() : BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Get the node associated with the collection.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function node() : BelongsTo
    {
        return $this->belongsTo(Node::class);
    }

    /**
     * Get the user associated with the collection.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the company associated with the collection.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
