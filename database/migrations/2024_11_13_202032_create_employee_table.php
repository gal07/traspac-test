<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('nip'); 
            $table->string('religion'); 
            $table->string('name'); 
            $table->date('born_date');
            $table->string('born_place');
            $table->string('address');
            $table->string('gender');
            $table->integer('group'); 
            $table->foreign('group')->references('id')->on('group');
            $table->integer('formation'); 
            $table->foreign('formation')->references('id')->on('formation');
            $table->integer('position'); 
            $table->foreign('position')->references('id')->on('position');
            $table->integer('placed_job'); 
            $table->foreign('placed_job')->references('id')->on('placed_job'); 
            $table->integer('work_unit'); 
            $table->foreign('work_unit')->references('id')->on('work_unit'); 
            $table->string('phone_number');
            $table->string('tax_number');
            $table->integer('status')->default(1);
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->integer('deleted_at');
            $table->integer('is_delete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
