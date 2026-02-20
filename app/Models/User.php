<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'two_factor_confirmed_at' => 'datetime',
        ];
    }

     /**
     * Get the company associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the client associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients() : HasMany
    {
        return $this->hasMany(Client::class);
    }

    /**
     * Get the collections associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collections() : HasMany
    {
        return $this->hasMany(Collection::class);
    }

    /**
     * Get the payments associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments() : HasMany
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Get the contracts associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contracts() : HasMany
    {
        return $this->hasMany(Contract::class);
    }

    /**
     * Get the nodes associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nodes() : HasMany
    {
        return $this->hasMany(Node::class);
    }

    /**
     * Get the plans associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plans() : HasMany
    {
        return $this->hasMany(Plan::class);
    }

    /**
     * Get the exchanges rates associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exchangeRates() : HasMany
    {
        return $this->hasMany(ExchangeRate::class);
    }
}
