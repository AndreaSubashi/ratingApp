<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserShowsTable extends Migration
{
    public function up()
    {
        Schema::create('user_shows', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Links to users table
            $table->foreignId('show_id')->constrained()->onDelete('cascade'); // Links to shows table
            $table->enum('status', ['watching', 'watched', 'dropped']); // Status of the show
            $table->tinyInteger('rating')->nullable(); // Rating (only for "watched")
            $table->text('comment')->nullable(); // Comment (optional)
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_shows');
    }
}