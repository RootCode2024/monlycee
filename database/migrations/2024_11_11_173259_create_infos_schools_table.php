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
        Schema::create('infos_schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_infos');
            $table->string('email_contact');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zip')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('copyright')->nullable();
            $table->text('description')->nullable();
            $table->longText('about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos_schools');
    }
};
