<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            $table->id('id');
            $table->string('name');
            $table->string('image');
            $table->double('price');
            $table->date('date_of_manufacture');
            $table->date('expiry');
            $table->integer('quantity');
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('categories_id')->nullable()
                ->constrained('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropDatabaseIfExists('products');
    }
}
