<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employees extends Model
{
    // use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employee';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nip',
        'religion',
        'born_date',
        'born_place',
        'address',
        'gender',
        'group',
        'formation',
        'position',
        'placed_job',
        'work_unit',
        'phone_number',
        'tax_number',
    ];


    public static function Group() {
        $group = DB::table('group')
        ->where('status', 1)
        ->get();

        return $group;
    }

    public static function Formation() {
        $formation = DB::table('formation')
        ->where('status', 1)
        ->get();

        return $formation;
    }

    public static function WorkUnit() {
        $workunit = DB::table('work_unit')
        ->where('status', 1)
        ->get();

        return $workunit;
    }

    public static function Position() {
        $position = DB::table('position')
        ->where('status', 1)
        ->get();

        return $position;
    }

    public static function PlacedJob() {
        $pjob = DB::table('placed_job')
        ->where('status', 1)
        ->get();

        return $pjob;
    }

    public static function Employee() {
        $employee = DB::table('employee')
            ->where('status', 1)
            ->where('is_delete', 0)
            ->get();

        return $employee;
    }

    public static function SelectByFilter($filter) {
        $employee = DB::table('employee')
            ->where('status', 1)
            ->where($filter['filterby'],$filter['filter_value'])
            ->get();

        return $employee;
    }

}
