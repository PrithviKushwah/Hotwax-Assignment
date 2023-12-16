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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('PARTY_ID')->unique(); // Unique constraint
            $table->string('SALUTATION')->nullable();
            $table->string('FIRST_NAME')->nullable();
            $table->string('MIDDLE_NAME')->nullable();
            $table->string('LAST_NAME')->nullable();
            $table->string('GENDER')->nullable();
            $table->date('BIRTH_DATE')->nullable();
            $table->string('MARITAL_STATUS_ENUM_ID')->nullable();
            $table->string('EMPLOYMENT_STATUS_ENUM_ID')->nullable();
            $table->string('OCCUPATION')->nullable();
            $table->timestamps();

            // Creating foreign key
            // $table->foreign('PARTY_ID')
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
        // Dropping foreign key
        Schema::table('person', function (Blueprint $table) {
            // $table->dropForeign(['PARTY_ID']);
        });

        // Dropping the table
        Schema::dropIfExists('person');
    }
};
