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
        Schema::create('bookstores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('isbn')->nullable();
            $table->string('authors')->nullable();
            $table->string('number_of_pages')->nullable();
            $table->string('publisher')->nullable();
            $table->string('country')->nullable();
            $table->string('release_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookstores');
    }
};
