<?php

use App\Models\Client;
use App\Models\Company;
use App\Models\Contract;
use App\Models\Plan;
use App\Models\User;
use Dom\Node;
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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('number_collection');
            $table->string('description')->nullable();
            $table->decimal('amount', 10, 2);
            $table->decimal('amount_paid', 10, 2);
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Contract::class);
            $table->foreignIdFor(Plan::class);
            $table->foreignIdFor(Node::class);
            $table->boolean('status');
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
        Schema::dropIfExists('collections');
    }
};
