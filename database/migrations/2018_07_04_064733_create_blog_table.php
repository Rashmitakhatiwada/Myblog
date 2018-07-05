<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!schema::hasTable('blog')){
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')-> unsigned();
            $table->integer('category_id')-> unsigned();
            $table->string('title');
            $table->string('figure');
            $table->longText('description');
            $table->string('heading');
            $table->boolean('status');
           $table->longText('fullstory');
            $table->timestamps();
        });
    }
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
