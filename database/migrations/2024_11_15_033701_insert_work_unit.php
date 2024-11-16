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
        DB::table('work_unit')->insert([
            ['name'=>'Deputi Bidang Reformasi Birokrasi, Akuntabilitas Aparatur dan Pengawasan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Deputi Bidang Kelembagaan dan Tata Laksana','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Deputi Bidang Sumber Daya Manusia Aparatur','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Deputi Bidang Pelayanan Publik','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Sekretariat Kementerian','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Inspektorat Kementerian','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Biro Umum dan Keuangan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Direktorat Standar dan Teknologi Informasi Geospasial','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Bagian Umum dan Layanan Pengadaan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Pusat Pengembangan Kompetensi Informasi Geospasial','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Biro Umum dan Keuangan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Direktorat Sumber Daya Manusia Informasi Geospasial','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Direktorat Pemetaan Rupabumi Wilayah Laut dan Pantai','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Biro Umum dan Layanan Pengadaan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Biro Hukum','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Biro Advokasi Perdagangan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Direktorat Pengamanan Perdagangan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Pusat Pelatihan Sumber Daya Manusia Ekspor dan Jasa Perdagangan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Sekretariat Direktorat Jenderal Perdagangan Luar Negeri','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Direktorat Bina Usaha Perdagangan','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'Direktorat Fasilitasi Ekspor dan Impor','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
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
