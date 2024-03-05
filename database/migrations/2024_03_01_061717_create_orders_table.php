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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('client');
            $table->boolean('paid');
            $table->enum('status',['new','in_process','finished','delivered']);
            $table->boolean('delivery');
            $table->string('address')->nullable();
            $table->double('delivery_cost')->nullable();
            $table->double('total');
            $table->foreignId('created_by');
            $table->foreignId('company_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
