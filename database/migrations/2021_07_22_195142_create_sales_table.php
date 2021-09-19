<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('items');
            $table->decimal('cash',10,2);
            $table->decimal('debt',10,2);
            $table->enum('status',['PAID','PENDING','CANCELLED']);
            $table->text('notes')->nullable();
            $table->timestamps();
            //Llave foranea
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //Llave foranea
            $table->unsignedBigInteger('cuestomer_id');
            $table->foreign('cuestomer_id')->references('id')->on('cuestomers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }

}
