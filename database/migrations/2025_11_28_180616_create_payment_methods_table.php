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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // QRIS, Gopay, ShopeePay, Transfer, Cash
            $table->string('code')->unique(); // qris, gopay, shopeepay, transfer, cash
            $table->string('type')->default('cash'); // cash, ewallet, transfer
            $table->boolean('is_active')->default(true);
            $table->boolean('is_online')->default(false);
            $table->text('configuration')->nullable(); // JSON config untuk payment gateway
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
