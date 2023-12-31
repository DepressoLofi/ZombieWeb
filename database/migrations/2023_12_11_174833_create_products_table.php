<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->unsignedInteger('units')->default(0);
            $table->double('price', 8, 2);
            $table->string('category');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
};
