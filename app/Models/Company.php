<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'ruc',
        'rif',
        'email',
        'logo',
        'website',
        'phone',
        'address',
    ];

    /**
     * Get all of the users for the Company
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get all of the clients for the Company
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients() : HasMany
    {
        return $this->hasMany(Client::class);
    }

    /**
     * Get all of the plans for the Company
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plans() : HasMany
    {
        return $this->hasMany(Plan::class);
    }

    /**
     * Get all of the nodes for the Company
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nodes() : HasMany
    {
        return $this->hasMany(Node::class);
    }

    /**
     * Get all of the collections for the Company
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collections() : HasMany
    {
        return $this->hasMany(Collection::class);
    }

    /**
     * Get all of the payments for the Company
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments() : HasMany
    {
        return $this->hasMany(Payment::class);
    }

    
}
