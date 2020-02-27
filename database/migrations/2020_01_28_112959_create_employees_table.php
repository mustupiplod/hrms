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
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('email_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('marital_status')->nullable()->comment('fetching from marital-status master');
            $table->string('location')->nullable();
            $table->text('address')->nullable();
            $table->string('education')->nullable()->comment('fetching from Education master');
            $table->string('degree')->nullable()->comment('fetching from the degree master');
            $table->string('year_complete')->nullable();
            $table->string('parent_department')->nullable()->comment('fetching from Parent-Department master');
            $table->string('department')->nullable()->comment('fetching from Department master');
            $table->string('department_lead')->nullable()->comment('fetching from Department-lead master');
            $table->string('designation')->nullable()->comment('fetching from Designation master');
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
