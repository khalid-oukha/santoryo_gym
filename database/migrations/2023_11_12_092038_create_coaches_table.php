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
        Schema::create('coaches', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('cin');
            $table->string('specialization');
            $table->timestamps();
            $table->text('description');
            $table->enum('status', ['avaliable', 'active'])->default('avaliable');
            $table->enum('gender', ['male', 'female'])->default('male');

            $table->softDeletes();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
