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
        Schema::create('order_part_models', function (Blueprint $table) {
            $table->id();
            $table->string('ORDER_ID')->nullable();
            $table->string('ORDER_PART_SEQ_ID')->nullable();
            $table->string('PART_NAME')->nullable();
            $table->string('STATUS_ID')->nullable();
            $table->string('VENDOR_PARTY_ID')->nullable();
            $table->string('CUSTOMER_PARTY_ID')->nullable();
            $table->decimal('PART_TOTAL')->nullable();
            $table->string('FACILITY_ID')->nullable();
            $table->string('SHIPMENT_METHOD_ENUM_ID')->nullable();
            $table->timestamps();

            // Set ORDER_ID as a foreign key referencing order_header
            

            // // Set CUSTOMER_PARTY_ID as a foreign key referencing party
            // $table->foreign('CUSTOMER_PARTY_ID')
            //     ->references('PARTY_ID')
            //     ->on('party')
            //     ->onUpdate('CASCADE')
            //     ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Dropping foreign keys
        Schema::table('order_part_models', function (Blueprint $table) {
            // $table->dropForeign(['ORDER_ID']);
            // $table->dropForeign(['CUSTOMER_PARTY_ID']);
        });

        // Dropping the table
        Schema::dropIfExists('order_part_models');
    }
};
