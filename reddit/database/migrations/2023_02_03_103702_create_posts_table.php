<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->timestamps();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('community_id');

            //Llave foranea
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('community_id')->references('id')->on('community');
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
};
