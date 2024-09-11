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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('p_type')->nullable();
            $table->text('no_bed')->nullable();
            $table->text('no_bath')->nullable();
            $table->text('f_type')->nullable();
            $table->text('s_room')->nullable();
            $table->text('clean_service_period')->nullable();
            $table->text('clean_service_period_other')->nullable();
            $table->text('clean_service')->nullable();
            $table->text('clean_service_other')->nullable();
            $table->text('pets')->nullable();
            $table->text('pet_type')->nullable();
            $table->text('allergies_sensitives')->nullable();
            $table->text('present')->nullable();
            $table->text('access')->nullable();
            $table->text('attension')->nullable();
            $table->text('request')->nullable();
            $table->text('hear')->nullable();
            $table->text('extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimates');
    }
};
