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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('PRODUCT_ID')->unique();
            $table->string('OWNER_PARTY_ID')->nullable();
            $table->string('PRODUCT_NAME')->nullable();
            $table->longText('DESCRIPTION')->nullable();
            $table->string('CHARGE_SHIPPING')->nullable();
            $table->string('RETURNABLE')->nullable();
            $table->timestamps();
        });

        // Creating foreign key
        // Schema::table('product', function (Blueprint $table) {
        //     $table->foreign('OWNER_PARTY_ID')
        //           ->references('PARTY_ID')
        //           ->on('party')
        //           ->onUpdate('CASCADE')
        //           ->onDelete('CASCADE');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Dropping foreign key
        Schema::table('product', function (Blueprint $table) {
            // $table->dropForeign(['OWNER_PARTY_ID']);
        });

        // Dropping the table
        Schema::dropIfExists('product');
    }
};
