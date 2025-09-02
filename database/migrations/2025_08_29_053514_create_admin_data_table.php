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
        Schema::create('admin_data', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        // $table->string('hero_bg_image'); 
        $table->string('position');
        $table->date('birthday');
        $table->string('phone');
        $table->string('email');
        $table->unsignedTinyInteger('age');
        $table->string('website')->nullable();
        $table->string('degree');
        $table->string('city');
    
        // Freelance availability enum
        $table->enum('freelance', ['available', 'not available'])->default('available');

        // Social links (nullable)
        $table->string('fb')->nullable();
        $table->string('insta')->nullable();
        $table->string('skype')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('twitter')->nullable();

        $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_data');
    }
};
