<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void // one post has many interaction one post has many likes but one like belongs to one post jafer 1 1
        DB::table('x')->where('post_id',$id)->get()
     */
    public function up()
    {
        Schema::create('interations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('like')->nullable();
            $table->boolean('dislike')->nullable();
            $table->unsignedBigInteger('post_id');
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')->onDelte('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interations');
    }
}
