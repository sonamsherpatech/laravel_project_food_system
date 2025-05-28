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
        Schema::create('social_medias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("social_media_type_id");
            $table->string('account_name');
            $table->string('url');
            $table->boolean("status");
            $table->dateTime('deleted_at');
            $table->unsignedBigInteger("created_by");
            $table->unsignedInteger("updated_by")->nullable();
            $table->timestamps();

            $table->foreign('social_media_type_id')->references('id')->on('social_media_types');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_medias');
    }
};
