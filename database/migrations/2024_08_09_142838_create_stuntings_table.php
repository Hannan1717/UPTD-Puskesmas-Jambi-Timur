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
        Schema::create('stuntings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('ibu');
            $table->string('anak');
            $table->date('tanggal_lahir');
            $table->decimal('panjang_badan', 5, 2); // Contoh jika panjang badan dalam cm
            $table->enum('kelamin', ['male', 'female']);
            $table->string('kondisi');
            $table->string('deviasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stuntings');
    }
};
