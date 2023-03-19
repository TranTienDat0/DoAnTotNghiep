<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->string('email_address');
            $table->date('date_of_birth');
            $table->tinyInteger('gender');
            $table->string('address');
            $table->string('password')->default('$2y$10$FoBBT6brPzjximfpWtC7LedZ4vu9hzFlN0xH6pYMn48iagXUdWSoy');
            $table->string('phone');
            $table->tinyInteger('role')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
