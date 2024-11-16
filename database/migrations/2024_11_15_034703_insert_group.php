<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // Eselon Data
        $ares = array(
            ['name'=>'ESELON I','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'ESELON II','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'ESELON III','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'ESELON IV','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ['name'=>'ESELON V','created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            
        );

        // Golongan Data
        $formation = array(
            ['name'=>'IV/e','eselon'=>'ESELON I'],
            ['name'=>'IV/d','eselon'=>'ESELON I'],
            ['name'=>'IV/d','eselon'=>'ESELON II'],
            ['name'=>'IV/b','eselon'=>'ESELON II'],
            ['name'=>'IV/b','eselon'=>'ESELON III'],
            ['name'=>'III/d','eselon'=>'ESELON III'],
            ['name'=>'III/d','eselon'=>'ESELON IV'],
            ['name'=>'III/b','eselon'=>'ESELON IV'],
            ['name'=>'III/b','eselon'=>'ESELON V'],
            ['name'=>'III/a','eselon'=>'ESELON V'],
        );

        $es_dump[] = [];

        foreach ($ares as $value) {
            DB::table('group')->insert($value);
            $lastID = DB::getPdo()->lastInsertId();
            $es_dump[$value["name"]] = array("name"=>$value["name"],"id"=>$lastID);
        }

        foreach ($formation as $value) {
            DB::table('formation')->insert([
                ['group_id'=>$es_dump[$value["eselon"]]["id"],'name'=>$value["name"],'created_at'=>time(),'updated_at'=>time(),'deleted_at'=>time()],
            ]);
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
