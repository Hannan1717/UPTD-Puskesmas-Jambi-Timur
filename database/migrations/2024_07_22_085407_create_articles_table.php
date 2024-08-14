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
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('creator_id');  // Pastikan kolom creator_id didefinisikan sebelum foreign key
            $table->string('title');
            $table->text('summary');
            $table->text('content');
            $table->string('slug')->unique();
            $table->timestamps();

            // Definisikan foreign key setelah kolom didefinisikan
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
