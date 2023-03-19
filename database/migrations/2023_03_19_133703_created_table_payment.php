<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedTablePayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function(Blueprint $table){
            
            $table->id('payment_id');
            $table->tinyInteger('method');
            $table->tinyInteger('status');
            $table->foreignId('shipping_id')->nullable()
                ->constrained('shipping')
                ->onDelete('cascade');
            $table->foreignId('order_id')->nullable()
                ->constrained('order')
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
        Schema::dropDatabaseIfExists('payment');
    }
}
