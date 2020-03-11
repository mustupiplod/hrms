<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpIncreamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_increaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_name')->nullable();
                $table->string('increament_date')->nullable();
            $table->string('current_designation')->nullable();
            $table->string('increament_type')->nullable();
            $table->string('remark')->nullable();
            $table->string('is_active')->nullable();
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
        Schema::dropIfExists('emp_increaments');
    }
}
