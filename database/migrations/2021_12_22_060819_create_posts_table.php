<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_desc');
            $table->longText('description');
            $table->char('type', 10)->default('text');
            $table->string('video_url')->nullable();
            $table->string('image_url_small')->nullable();
            $table->string('image_url_medium')->nullable();
            $table->string('image_url_large')->nullable();
            
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->nullable();
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('posts');
    }
}
