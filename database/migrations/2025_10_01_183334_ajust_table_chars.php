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
            $table->integer('nex')->default(0);
            $table->integer('pv')->default(0);
            $table->integer('pe')->default(0);
            $table->integer('san')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn('nex');
            $table->dropColumn('pv');
            $table->dropColumn('pe');
            $table->dropColumn('san');
        });
    }
};
