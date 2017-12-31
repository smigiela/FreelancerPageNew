<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author_name');
            $table->string('author_email');
            $table->text('comment');
            $table->integer('post_id')
                ->unsigned();
            $table->foreign('post_id')
                ->references('id')->on('posts');  
            $table->enum('status', ['WAITING', 'PUBLISHED'])
                ->default('WAITING');      
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
        Schema::dropIfExists('comments');
    }
}
