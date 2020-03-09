<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topic')->nullable()->comment('fetching from the questionnaire type master');
            $table->string('question_name')->nullable()->comment('main question of topic');
            $table->string('department_id')->nullable()->comment('fetching the id of departments');
            $table->string('answer_master_id')->nullable();
            $table->string('valid_answer')->nullable();
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
        Schema::dropIfExists('question_masters');
    }
}
