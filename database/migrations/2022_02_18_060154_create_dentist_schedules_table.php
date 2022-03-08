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
        Schema::create('dentist_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_duty');
            $table->string('period', 20);
            $table->string('status', 20);
            $table->unsignedBigInteger('dentist_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('dentist_id')->references('id')->on('dentists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentist_schedules');
    }
};
