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
        Schema::create('treatments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('treatment_name')->nullable();
            $table->integer('price')->nullable();
            $table->text('description')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('priority')->nullable();
            $table->enum('deleted', ['active', 'inactive', 'deleted'])->default('active');
            $table->enum('deleted', ['0', '1'])->default('0');
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
        Schema::dropIfExists('treatments');
    }
};
