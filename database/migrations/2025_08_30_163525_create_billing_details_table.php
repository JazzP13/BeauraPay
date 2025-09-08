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
        Schema::create('billing_details', function (Blueprint $table) {
            $table->id();
            $table->integer('billing_history_id')->references('id')->on('billing_history')->onDelete('cascade');
            $table->string('service');
            $table->integer('service_price');
            $table->string('employee');
            $table->decimal('comission', 5, 2)->default(30.00);
            $table->decimal('comission_amount', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_details');
    }
};
