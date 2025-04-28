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
        Schema::table('payments', function (Blueprint $table) {
            $table->string('order_id')->nullable()->after('member_code');
            $table->string('midtrans_transaction_id')->nullable()->after('order_id');
            $table->string('payment_type')->nullable()->after('midtrans_transaction_id');
            $table->json('raw_response')->nullable()->after('payment_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn([
                'order_id',
                'midtrans_transaction_id',
                'payment_type',
                'raw_response', 
            ]);
        });
    }
};
