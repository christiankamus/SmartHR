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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('name');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('father');
            $table->string('mother');
            $table->integer('family_position');
            $table->date('birth_date');
            $table->foreignId('country_id')->constrainted();
            $table->foreignId('state_id')->constrainted();
            $table->foreignId('city_id')->constrainted();
            $table->string('territory');
            $table->string('sector');
            $table->string('identity_document');
            $table->string('identity_document_number');
            $table->string('phone');
            $table->string('email');
            $table->string('marital_status');
            $table->foreignId('educationlevel_id')->constrainted();
            $table->string('cnss_number');
            $table->foreignId('category_id')->constrainted();
            $table->foreignId('fonction_id')->constrainted();
            $table->foreignId('team_id')->constrainted();
            $table->foreignId('section_id')->constrainted();
            $table->foreignId('service_id')->constrainted();
            $table->foreignId('department_id')->constrainted();
            $table->foreignId('site_id')->constrainted();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
