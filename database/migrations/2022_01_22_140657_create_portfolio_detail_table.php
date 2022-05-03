<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_detail', function (Blueprint $table) {
            $table->id(); 
            $table->text('cover_image')->nullable();
            $table->text('category')->nullable();
            $table->text('slug')->nullable();
            $table->text('title_description')->nullable();
            $table->text('brief')->nullable(); 
            $table->text('description')->nullable(); 
            $table->text('one_title')->nullable();  
            $table->text('one_description')->nullable();  
            $table->text('two_title')->nullable();  
            $table->text('two_description')->nullable();  
            $table->text('three_description')->nullable();  
            $table->text('image')->nullable();  
            $table->text('image_two')->nullable();  
            $table->text('image_three')->nullable();  
            $table->text('image_four')->nullable();  
            $table->text('image_five')->nullable();  
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('portfolio_detail');
    }
}
