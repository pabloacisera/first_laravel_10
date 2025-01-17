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
        //
        Schema::create('film', function(Blueprint $table) 
            {
              $table->id();
              $table->string('title');
              $table->text('description');
              $table->string('duration');
              $table->string('poster');
              $table->decimal('rating', 3, 1);
              $table->string('video')->nullable();
              $table->timestamps();
            }
        );
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('film');
    }
};
