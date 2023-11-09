<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('nip');
            $table->string('rank');
            $table->string('group');
            $table->string('position');
            $table->integer('daily_money')->default(0);
            $table->integer('transport_money')->default(0);
            $table->integer('food_money')->default(0);
            $table->enum('role', ['cadres', 'employee']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
