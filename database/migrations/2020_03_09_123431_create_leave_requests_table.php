<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->integer('employee_name')->nullable()->comment('will be fetching from the employee table using id');
            $table->integer('leave_type')->nullable()->comment('this will be fetching from the leave type table using the id');
            $table->string('from_date');
            $table->string('end_date');
            $table->integer('total_days');
            $table->string('remark');
            $table->integer('is_active')->nullable()->comment('0 | means active , 1 | means inactive');
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
        Schema::dropIfExists('leave_requests');
    }
}
