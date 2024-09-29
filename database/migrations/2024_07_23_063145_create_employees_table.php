<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('bod');
            $table->integer('sex');
            $table->integer('bvill_id');
            $table->integer('bdis_id');
            $table->integer('bpro_id');
            $table->string('address')->nullable();
            $table->integer('vill_id');
            $table->integer('dis_id');
            $table->integer('pro_id');
            $table->string('phone');
            $table->integer('pos_id');
            $table->integer('dpart_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('status_id');
            $table->string('mar_name')->nullable();
            $table->string('mar_work')->nullable();
            $table->string('mar_address')->nullable();
            $table->string('mar_phone')->nullable();
            $table->text('note')->nullable();
            $table->string('picture');
            $table->string('file');
            $table->integer('del')->default('1');
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