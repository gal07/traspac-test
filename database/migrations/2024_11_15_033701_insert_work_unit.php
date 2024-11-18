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
            ['name'=>'Deputi Bidang Reformasi Birokrasi, Akuntabilitas Aparatur dan Pengawasan'],
            ['name'=>'Deputi Bidang Kelembagaan dan Tata Laksana'],
            ['name'=>'Deputi Bidang Sumber Daya Manusia Aparatur'],
            ['name'=>'Deputi Bidang Pelayanan Publik'],
            ['name'=>'Sekretariat Kementerian'],
            ['name'=>'Inspektorat Kementerian'],
            ['name'=>'Biro Umum dan Keuangan'],
            ['name'=>'Direktorat Standar dan Teknologi Informasi Geospasial'],
            ['name'=>'Bagian Umum dan Layanan Pengadaan'],
            ['name'=>'Pusat Pengembangan Kompetensi Informasi Geospasial'],
            ['name'=>'Biro Umum dan Keuangan'],
            ['name'=>'Direktorat Sumber Daya Manusia Informasi Geospasial'],
            ['name'=>'Direktorat Pemetaan Rupabumi Wilayah Laut dan Pantai'],
            ['name'=>'Biro Umum dan Layanan Pengadaan'],
            ['name'=>'Biro Hukum'],
            ['name'=>'Biro Advokasi Perdagangan'],
            ['name'=>'Direktorat Pengamanan Perdagangan'],
            ['name'=>'Pusat Pelatihan Sumber Daya Manusia Ekspor dan Jasa Perdagangan'],
            ['name'=>'Sekretariat Direktorat Jenderal Perdagangan Luar Negeri'],
            ['name'=>'Direktorat Bina Usaha Perdagangan'],
            ['name'=>'Direktorat Fasilitasi Ekspor dan Impor'],
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
