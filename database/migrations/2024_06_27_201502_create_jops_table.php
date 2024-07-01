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
        Schema::create('jops', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->double('salary');
            $table->string('requirements');
            $table->string('discription');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('location');
            $table->enum('type',['partTime','fullTime'])->default('partTime');
            $table->string('company');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jops');
    }
};
