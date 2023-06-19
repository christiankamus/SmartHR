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
        Schema::create('dependants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrainted();
            $table->string('relationship');
            $table->string('name');
            $table->string('lastname');
            $table->string('firstname');
            $table->foreignId('city_id')->constrainted();
            $table->date('birth_date');
            $table->boolean('is_actif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependants');
    }
};
