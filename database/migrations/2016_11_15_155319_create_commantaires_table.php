<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommantairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commantaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomCom');
            $table->string('emailCom');
            $table->text('comment');
            $table->boolean('approve');
            $table->integer('id_blog')->unsigned();
            $table->foreign('id_blog')->references('id')->on('blogs')->ondelete('cascade');
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
        Schema::drop('commantaires');
    }
}
