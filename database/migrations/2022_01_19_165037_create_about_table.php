<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
         $table->id();
         $table->text('cover_image')->nullable();
         $table->text('title')->nullable();
         $table->text('title_description')->nullable();
         $table->text('one_list')->nullable();
         $table->text('one_list_title')->nullable();
         $table->text('one_list_description')->nullable();
         $table->text('two_list')->nullable();
         $table->text('two_list_title')->nullable();
         $table->text('two_list_description')->nullable();
         $table->text('three_list')->nullable(); 
         $table->text('three_list_title')->nullable(); 
         $table->text('three_list_description')->nullable(); 
         $table->text('title_two')->nullable(); 
         $table->text('description')->nullable(); 
         $table->text('image')->nullable();  
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
        Schema::dropIfExists('about');
    }
}
