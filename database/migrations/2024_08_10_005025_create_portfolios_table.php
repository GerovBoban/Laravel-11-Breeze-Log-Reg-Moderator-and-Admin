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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();  
            $table->foreignId('user_id')->constrained('users')->default(1);           
            $table->text('language_1');
            $table->text('description_1');
            $table->text('language_2');
            $table->text('description_2');
            $table->text('language_3');
            $table->text('description_3');
            $table->char('Yes_No', 2)->default('DA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
