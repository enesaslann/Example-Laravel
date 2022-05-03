<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id(); 
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('project')->nullable();
            $table->string('brief_description')->nullable();
            $table->string('description')->nullable(); 
            $table->string('descriptionTwo')->nullable(); 
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
        Schema::dropIfExists('project');
    }
}
