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
            ['name'=>'Kepala Sekretariat Utama'],
            ['name'=>'Penyusun laporan keuangan'],
            ['name'=>'Surveyor Pemetaan Pertama'],
            ['name'=>'Analis Data Survei dan Pemetaan'],
            ['name'=>'Perancang Per-UUan Utama IV/e'],
            ['name'=>'Kepala Biro Perencanaan,Kepegawaian dan hukum'],
            ['name'=>'Widyaiswara Utama IV/e'],
            ['name'=>'Analis Kepegawaian Madya IV/b'],
            ['name'=>'Kepala Sub Bidang Kerjasama dan Pelayanan Riset,DKP'],
            ['name'=>'Analis Hukum'],
            ['name'=>'Peneliti Pertama III/b'],
            ['name'=>'Surveyor Pemetaan Muda'],
            ['name'=>'Analis Jabatan'],
            ['name'=>'Kepala Subbag Kepegawaian'],
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
