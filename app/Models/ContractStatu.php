<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContractStatu extends Model
{
    /** @use HasFactory<\Database\Factories\ContractStatuFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    /** get all of the contracts for the ContractStatu
    * 
    * @return \Illuminate\Database\Eloquent\Relations\HasMany 
    * 
    */

    public function contracts() : HasMany
    {
        return $this->hasMany(Contract::class);
    }
}
