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
        Schema::create('formation', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('group_id'); 
            $table->foreign('group_id')->references('id')->on('group'); 
            $table->string('name');
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
        Schema::dropIfExists('formation');
    }
};
