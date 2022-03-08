<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_treatment_schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('employee_id');
            $table->time('time');
            $table->string('status', 20);
            $table->string('reserve_type', 30);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('schedule_id')->references('id')->on('dentist_schedules')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->primary(['schedule_id', 'patient_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_treatment_schedules');
    }
};
