<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('position')->insert([
            ['name'=>'Kepala Sekretariat Utama','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Penyusun laporan keuangan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Surveyor Pemetaan Pertama','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Analis Data Survei dan Pemetaan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Perancang Per-UUan Utama IV/e','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Kepala Biro Perencanaan,Kepegawaian dan hukum','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Widyaiswara Utama IV/e','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Analis Kepegawaian Madya IV/b','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Kepala Sub Bidang Kerjasama dan Pelayanan Riset,DKP','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Analis Hukum','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Peneliti Pertama III/b','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Surveyor Pemetaan Muda','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Analis Jabatan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Kepala Subbag Kepegawaian','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
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
