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
        Schema::create('dentists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dentist_name', 50)->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('email', 50)->nullable();
            $table->text('image')->nullable();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('room_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentists');
    }
};
