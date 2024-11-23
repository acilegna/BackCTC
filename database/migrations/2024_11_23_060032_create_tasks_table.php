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
        Schema::create('tasks', function (Blueprint $table) {

            $table->integer('id')->autoIncrement()->foreign();
            $table->string('title', 255);
            $table->text('description');
            $table->date('date');
            $table->string('location', 255);
            $table->string('responsible', 255);
            $table->integer('likes')->default(0);
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};