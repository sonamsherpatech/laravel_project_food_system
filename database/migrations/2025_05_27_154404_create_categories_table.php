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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->text('description');
            $table->integer('rank'); 
            $table->boolean('status');
            $table->dateTime('deleted_at');
            $table->timestamps();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
