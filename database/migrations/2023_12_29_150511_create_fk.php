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
        Schema::table('materia_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->unsignedBigInteger('materia_id')->nullable()->change();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('materia_id')->references('id')->on('materia');
        });

        Schema::table('mensagem', function (Blueprint $table) {
            $table->foreign('materia_id')->references('id')->on('materia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
};
