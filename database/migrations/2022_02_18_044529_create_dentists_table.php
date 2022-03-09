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
            $table->string('dentist_name')->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('email')->nullable();
            $table->text('image')->nullable();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('room_id');
            $table->enum('status', ['active', 'inactive', 'deleted'])->default('active');
            $table->enum('deleted', ['0', '1'])->default('0');
            $table->timestamps();

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
