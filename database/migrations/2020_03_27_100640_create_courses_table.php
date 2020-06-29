<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('name');
            $table->string('about');
            $table->text('describe');
            $table->integer('duration');
            $table->integer('lectures');
            $table->integer('quizzes');
            $table->integer('price');
            $table->string('image');
            $table->integer('pass_percentage');
            $table->integer('status')->default(0);
            $table->integer('show')->default(0);
            $table->integer('max_retakes');
            $table->string('meta_keywords')->nullable();
            $table->string('meta_describe')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
