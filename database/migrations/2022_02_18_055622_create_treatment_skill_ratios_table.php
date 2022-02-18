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
        Schema::create('treatment_skill_ratios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('skill_name', 50);
            $table->string('time_spent', 3);
            $table->string('status', 20);
            $table->unsignedBigInteger('treatment_id');
            $table->unsignedBigInteger('dentist_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('cascade');
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
        Schema::dropIfExists('treatment_skill_ratios');
    }
};
