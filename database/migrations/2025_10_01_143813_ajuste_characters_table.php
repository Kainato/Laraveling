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
        Schema::table('characters', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
            $table->foreignId('class_id')->constrained('classes')->nullable();
            $table->foreignId('origin_id')->constrained('origins')->nullable();
            $table->foreignId('trail_id')->constrained('trails')->nullable();
            $table->integer('strength')->default(0);
            $table->integer('agility')->default(0);
            $table->integer('intellect')->default(0);
            $table->integer('presence')->default(0);
            $table->integer('force')->default(0);
        });
        Schema::table('classes', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('origins', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('trails', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('origins', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('trails', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
};
