<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReasonMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reason_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reason_id')->nullable();
            $table->string('reason_type')->nullable();
            $table->string('reason_content')->nullable();
            $table->integer('is_active')->nullable()->comment('0 is Active || 1 is Inactive');
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
        Schema::dropIfExists('reason_masters');
    }
}
