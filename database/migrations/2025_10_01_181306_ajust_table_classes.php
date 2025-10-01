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
        Schema::table("classes", function (Blueprint $table) {
            $table->integer("initial_pv");
            $table->integer("add_pv");
            $table->integer("initial_pe");
            $table->integer("add_pe");
            $table->integer("initial_san");
            $table->integer("add_san");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("classes", function (Blueprint $table) {
            $table->dropColumn("initial_pv");
            $table->dropColumn("add_pv");
            $table->dropColumn("initial_pe");
            $table->dropColumn("add_pe");
            $table->dropColumn("initial_san");
            $table->dropColumn("add_san");
        });
    }
};
