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
        Schema::create('admin_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_heading');
            $table->text('about_desc');
            $table->string('dev_heading');
            $table->text('dev_desc');
            $table->text('last_desc');
            $table->integer('happy_clients');
            $table->integer('projects'); 
            $table->integer('reviews');
            $table->integer('skills');
            $table->string('about_image'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_abouts');
    }
};
