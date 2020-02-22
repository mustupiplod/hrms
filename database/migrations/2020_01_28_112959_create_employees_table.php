<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('location')->nullable();
            $table->text('address')->nullable();
            $table->string('education')->nullable();
            $table->string('year_complete')->nullable();
            $table->string('parent_department')->nullable();
            $table->string('department')->nullable();
            $table->string('department_lead')->nullable();
            $table->string('designation')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
