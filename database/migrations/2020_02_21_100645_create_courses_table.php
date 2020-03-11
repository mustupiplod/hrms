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
            $table->string('course_name')->nullable();
            $table->string('image')->nullable();
            $table->string('questionnaire')->nullable()->comment('fetching from the questionnaire master');
            $table->string('pass_criteria')->nullable();
            $table->string('trainer')->nullable()->comment('fetching from the employees master');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('assign_to')->nullable()->comment('list fetch from different modules');
            $table->integer('is_active')->nullable()->comment('0 : Active | 1 : Inactive ');
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
