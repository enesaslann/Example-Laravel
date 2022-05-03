<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_image', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proje_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->string('last_name')->nullable();
            $table->smallInteger('order')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('proje_id')->references('id')->on('project')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_image');
    }
}
