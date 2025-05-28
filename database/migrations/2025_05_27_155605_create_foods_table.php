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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('descrition');
            $table->string('image');
            $table->decimal('price',8,2);
            $table->decimal('discount',8,2)->default(0); 
            $table->boolean('feature_foood')->default(0);
            $table->dateTime('deleted_at');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
