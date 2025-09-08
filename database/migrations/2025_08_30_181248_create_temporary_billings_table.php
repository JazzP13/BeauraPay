<?php

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
        Schema::create('temporary_billings', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->integer('price');
            $table->string('employee');
            $table->decimal('commission_rate', 5, 2)->default(30.00);
            $table->integer('commission_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temporary_billings');
    }
};
