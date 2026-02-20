<?php

use App\Models\Client;
use App\Models\Company;
use App\Models\ContractStatu;
use App\Models\Node;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('n_contract');
            $table->string('address');
            $table->string('balance');
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Plan::class);
            $table->foreignIdFor(Node::class);
            $table->foreignIdFor(ContractStatu::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Company::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
