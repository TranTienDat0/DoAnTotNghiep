<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedTableShipping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function(Blueprint $table){
            
            $table->id('order_id');
            $table->tinyInteger('status');
            $table->date('date');
            $table->double('total');
            $table->foreignId('shipping_id')->nullable()
                ->constrained('shipping')
                ->onDelete('cascade');
            $table->foreignId('user_id')->nullable()
                ->constrained('users')
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
        Schema::dropDatabaseIfExists('order');
    }
}
