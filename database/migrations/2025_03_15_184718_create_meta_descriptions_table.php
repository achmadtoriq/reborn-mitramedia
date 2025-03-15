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
        Schema::create('meta_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('routename')->nullable(false)->unique(true);
            $table->text('meta_desc');
            $table->text('meta_title');
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_descriptions');
    }
};
