<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name_az');
            $table->string('name_en');
            $table->string('name_ru');

            $table->longText('details_az');
            $table->longText('details_en');
            $table->longText('details_ru');

            $table->longText('shipping_az');
            $table->longText('shipping_en');
            $table->longText('shipping_ru');

            $table->string('thumbnail');
            $table->string('images');

            $table->integer('price');
            $table->integer('discount');
            $table->integer('count');
            $table->integer('views');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
