<?php

use App\Models\ClientCategory;
use App\Models\Company;
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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dni')->unique()->default('');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->foreignIdFor(ClientCategory::class);
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
        Schema::dropIfExists('clients');
    }
};
