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
            ['name'=>'ESELON I'],
            ['name'=>'ESELON II'],
            ['name'=>'ESELON III'],
            ['name'=>'ESELON IV'],
            ['name'=>'ESELON V'],
            
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
                ['group_id'=>$es_dump[$value["eselon"]]["id"],'name'=>$value["name"]],
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
