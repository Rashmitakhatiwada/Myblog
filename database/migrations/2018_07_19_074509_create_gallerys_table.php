<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallerysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!schema::hasTable('gallerys')){
        Schema::create('gallerys', function (Blueprint $table) {
            $table->increments('id');
            $table-> integer('gtype');
            $table-> integer('blog_id')->unsigned();
            $table-> string('gtitle');
            $table-> longText('gdescription');
            $table-> integer('gimage');
            $table-> boolean('gstatus');

            $table->foreign('blog_id')->references('id')->on('blog');
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
        Schema::dropIfExists('gallerys');
    }
}
