<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    
    public function up()
    {
       Schema::create('categories', function (Blueprint $table){
           $table->integer('id');
           $table->string('category');
           $table->timestamps();
       });
    }

    
    public function down()
    {
        Scheme::dropIfExists('categories');
    }
}
