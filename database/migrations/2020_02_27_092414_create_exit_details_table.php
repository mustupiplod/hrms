<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exit_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_name')->nullable()->comment('Fetching employe id from the employee master');
            $table->string('separation_date')->nullable();
            $table->string('interviewer')->nullable()->comment('fetch list from the employee master');
            $table->string('reason')->nullable();
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
        Schema::dropIfExists('exit_details');
    }
}
