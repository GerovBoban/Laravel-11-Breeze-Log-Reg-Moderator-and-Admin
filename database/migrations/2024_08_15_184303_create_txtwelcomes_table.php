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
        Schema::create('txtwelcomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->default(1);
            $table->text('img_lnk');
            $table->binary('image')->nullable();  
            $table->text('img_name');      
            $table->text('txt_1');
            $table->text('txt_2');
            $table->text('txt_3');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('txtwelcomes');
    

    }
};
