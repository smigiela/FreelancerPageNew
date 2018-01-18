<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->string('slug')
                ->unique();
            $table->string('image');
            $table->string('alt_tag')->null;
            $table->integer('category_id')
                ->unsigned()
                ->nullable();
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');    
            $table->integer('user_id')
                ->unsigned()
                ->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->longtext('body');        
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])
                ->default('DRAFT');  
            $table->string('subtitle');
            $table->string('meta_content')
                ->nullable();
            $table->string('keywords')
                ->nullable();         
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
        Schema::dropIfExists('posts');
    }
}
