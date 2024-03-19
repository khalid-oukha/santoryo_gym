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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('coach_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('duration')->comment('Duration in minutes');
            $table->decimal('price', 8, 2);
            $table->dateTime('start_at');
            $table->enum('status', ['planned', 'completed', 'canceled'])->default('planned');
            $table->timestamps();
            $table->text('description');
            $table->string('image')->nullable();
            $table->integer('capacity');
            $table->foreign('coach_id')->references('id')->on('coaches')
                ->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
