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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('blog_category_id');
            $table->string('slug'); 
            $table->text('description');
            $table->string('image');
            $table->boolean('status');
            $table->dateTime('deleted_at');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();

            $table->foreign('blog_category_id')->references('id')->on('blog_categories');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
