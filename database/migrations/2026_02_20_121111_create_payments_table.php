<?php

use App\Models\Client;
use App\Models\Company;
use App\Models\Contract;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('n_payment');
            $table->string('description');
            $table->string('date_payment');
            $table->string('reference');
            $table->decimal('amount', 10, 2);
            $table->decimal('ex_rate', 10, 2);
            $table->decimal('ex_amount', 10, 2);
            $table->string('status');
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Contract::class);
            $table->foreignIdFor(Plan::class);
            $table->foreignIdFor(Node::class);
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
        Schema::dropIfExists('payments');
    }
};
