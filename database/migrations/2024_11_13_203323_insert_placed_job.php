<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('placed_job')->insert([
            ['name'=>'Jakarta'],
            ['name'=>'Bandung'],
            ['name'=>'Medan'],
            ['name'=>'Solo'],
            ['name'=>'Yogyakarta'],
            ['name'=>'Malang'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
