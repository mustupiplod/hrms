<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_masters', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->bigIncrements('question_id');
            $table->integer('question_master_id')->nullable()->comment('will be coming from the questionnaire master id');
            $table->string('question')->nullable();
            $table->string('answer')->nullable();
            $table->string('option_1')->nullable();
            $table->string('option_2')->nullable();
            $table->string('option_3')->nullable();
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
        Schema::dropIfExists('answer_masters');
    }
}
