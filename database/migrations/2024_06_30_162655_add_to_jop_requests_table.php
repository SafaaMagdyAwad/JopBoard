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
        Schema::table('jop_requests', function (Blueprint $table) {
            //
            $table->enum('status',['notSeen','waiting','accepted','rejected'])->default('notSeen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jop_requests', function (Blueprint $table) {
            //
        });
    }
};
