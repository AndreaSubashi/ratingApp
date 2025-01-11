<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title');
            $table->string('genre')->nullable(); // Genre as a string or JSON
            $table->text('description')->nullable();
            $table->string('poster_path')->nullable(); // Path to the poster
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
