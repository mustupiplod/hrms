<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('policy_title')->nullable();
            $table->string('description')->nullable();
            $table->string('employees')->nullable()->comment('fetching from the employee table');
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
        Schema::dropIfExists('company_policies');
    }
}
