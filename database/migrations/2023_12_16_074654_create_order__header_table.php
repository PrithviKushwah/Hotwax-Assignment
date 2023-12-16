<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\order_part_model;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_header_models', function (Blueprint $table) {
            $table->id();
            $table->string('ORDER_ID')->nullable();
            $table->string('ORDER_NAME')->nullable();
            $table->date('PLACED_DATE')->nullable();
            $table->date('APPROVED_DATE')->nullable();
            $table->string('STATUS_ID')->nullable();
            $table->string('CURRENCY_UOM_ID')->nullable();
            $table->string('PRODUCT_STORE_ID')->nullable();
            $table->string('SALES_CHANNEL_ENUM_ID')->nullable();
            $table->decimal('GRAND_TOTAL')->nullable();
            $table->date('COMPLETED_DATE')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_header_models');
    }

    
};
