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
            ['name'=>'Jakarta','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Bandung','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Medan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Solo','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Yogyakarta','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Malang','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
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
