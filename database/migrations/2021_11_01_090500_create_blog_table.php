<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image')->nullable();
            $table->string('image')->nullable();
            $table->string('imagetwo')->nullable();
            $table->string('title')->nullable();
            $table->string('title_two')->nullable();
            $table->text('brief_description')->nullable();
            $table->text('description')->nullable();
            $table->text('description_two')->nullable();
            $table->text('description_three')->nullable(); 
            $table->string('slug', 155)->unique();
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
        Schema::dropIfExists('blog');
    }
}
