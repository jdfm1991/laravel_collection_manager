<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    /** @use HasFactory<\Database\Factories\ContractFactory> */
    use HasFactory;

    protected $fillable = [
        'n_contract',
        'address',
        'balance',
        'client_id',
        'plan_id',
        'node_id',
        'contract_statu_id',
        'user_id',
        'company_id',
    ];

    /** get the client that owns the Contract
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    *
    */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /** get the plan that owns the Contract
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    *
    */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    /** get the node that owns the Contract
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    *
    */
    public function node()
    {
        return $this->belongsTo(Node::class);
    }

    /** get the contract_statu that owns the Contract
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    *
    */
    public function contract_statu()
    {
        return $this->belongsTo(ContractStatu::class);
    }

    /** get the user that owns the Contract
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    *
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** get the company that owns the Contract
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    *
    */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /** get the collections that owns the Contract
    * 
    * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
    *
    */
    public function Collections()
    {
        return $this->belongsToMany(Collection::class)->withTimestamps();
    }
}
