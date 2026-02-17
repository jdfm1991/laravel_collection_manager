<?php

use App\Models\Client;
use App\Models\Company;
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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('number_contract');
            $table->string('file_contract')->nullable();
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Plan::class);
            $table->foreignIdFor(Node::class);
            $table->decimal('balance', 8, 2);
            $table->longText('address');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Company::class);
            $table->boolean('status');
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
