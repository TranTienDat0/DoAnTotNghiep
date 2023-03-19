<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedTableOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function(Blueprint $table){
            
            $table->id('order_detail_id');
            $table->string('product_name');
            $table->double('price');
            $table->double('quantity');
            $table->foreignId('products_id')->nullable()
                ->constrained('products')
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
