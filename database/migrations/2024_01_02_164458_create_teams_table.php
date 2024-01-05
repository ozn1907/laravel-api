<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('league_id'); 
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('cascade');
            $table->string('name'); 
            $table->string('city'); 
            $table->integer('foundation_year'); 
            // $table->text('description'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams'); // Drops the 'teams' table
    }
}
