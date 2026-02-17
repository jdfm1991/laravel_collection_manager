<?php

use App\Models\Client;
use App\Models\Company;
use App\Models\Contract;
use App\Models\PaymentType;
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
            $table->string('number_payment');
            $table->date('date_payment');
            $table->foreignIdFor(PaymentType::class);
            $table->integer('number_reference');
            $table->string('description')->nullable();
            $table->decimal('amount_usd', 10, 2);
            $table->decimal('ex_rate', 10, 2);
            $table->decimal('amount_bss', 10, 2);
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Contract::class);
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
        Schema::dropIfExists('payments');
    }
};
