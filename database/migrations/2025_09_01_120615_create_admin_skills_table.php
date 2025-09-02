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
        Schema::create('admin_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill_name');
            $table->unsignedTinyInteger('skill_percent'); // value between 0-100
            $table->unsignedTinyInteger('skill_rank');    // value between 0-100
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_skills');
    }
};
