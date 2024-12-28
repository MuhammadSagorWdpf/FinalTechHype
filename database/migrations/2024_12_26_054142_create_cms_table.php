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
        Schema::create('cms', function (Blueprint $table) {
            $table->id();
            $table->string('page')->nullable();
            $table->string('section')->nullable();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('description')->nullable();
            $table->string('sub_title1')->nullable();
            $table->string('description1')->nullable();
            $table->string('sub_title2')->nullable();
            $table->string('description2')->nullable();
            $table->string('sub_title3')->nullable();
            $table->string('description3')->nullable();
            $table->string('sub_title4')->nullable();
            $table->string('description4')->nullable();
            $table->string('sub_title5')->nullable();
            $table->string('description5')->nullable();
            $table->string('button')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms');
    }
};
