<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Employees;
use App\Thirdparty\SSP;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class EmployeeController extends Controller
{
    
    protected $employeinstance;

    public function __construct() {
        $this->employeinstance = new Employees();
    }

    /**
     * Display the employee view.
     */
    public function index(): View
    {
        
        // collect some data
        $data["group"] = $this->employeinstance::Group();
        $data["formation"] = $this->employeinstance::Formation();
        $data["workunit"] = $this->employeinstance::WorkUnit();
        $data["placedjob"] = $this->employeinstance::PlacedJob();
        $data["employee"] = $this->employeinstance::Employee();
        $data["position"] = $this->employeinstance::Position();
        $data["SelectByFilter"] = $this->employeinstance::SelectByFilter(['filterby'=>'formation','filter_value'=>2]);

        // view
        return view('employee.employee',$data);
    }

    /**
     * Insert data employee
     */
    public function store(Request $request){

        // prevent another request except ajax
        if (!$request->ajax()) {
            return response('Forbidden.', 403);
        }

        // retrieve request
        $retrieve = $request->all();

        // uniqe NIP
        $uniqueNIP = $this->employeinstance::SelectByFilter(['filterby'=>'nip','filter_value'=>$retrieve['nip']]);
        if (sizeof($uniqueNIP) > 0) {
            return response()->json([
                'success' => false,
                'message' => 'NIP Sudah Digunakan',
            ]);
        }

        // Convertion date
        $conv_date = date('Y-m-d',strtotime($retrieve["born_date"]));
        $retrieve["born_date"] = $conv_date;
        
        // create new data
        $this->employeinstance::create($retrieve);

        // return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
        ]);
        
    }


    /**
     *  Get detail data employee.
     */
    public function edit(Request $request) {

        // prevent another request except ajax
        if (!$request->ajax()) {
            return response('Forbidden.', 403);
        }
        
        // get data employee
        $retrieve = $request->all();
        $find = $this->employeinstance::SelectByFilter(['filterby'=>'id','filter_value'=>base64_decode($retrieve['id'])]);
        if (sizeof($find) == 0) {
            return response()->json([
                'success' => false,
                'message' => 'ID Tidak Ditemukan',
            ]);
        }

        // return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $find[0]
        ]);

    }

    public function update(Request $request) {

        // prevent another request except ajax
        if (!$request->ajax()) {
            return response('Forbidden.', 403);
        }

        // retrieve request
        $retrieve = $request->all();
        $find = $this->employeinstance::find($retrieve["idtarget"]);
        if (!$find) {
            return response()->json([
                'success' => false,
                'message' => 'ID Tidak Ditemukan',
            ]);
        }

        // remove key
        $request->request->remove('key');
        $request->request->remove('idtarget');
        $retrieve = $request->all();
        $conv_date = date('Y-m-d',strtotime($retrieve["born_date"]));
        $retrieve["born_date"] = $conv_date;

        // Update
        DB::table('employee')
        ->where('id', $find->id)
        ->update($retrieve);

        // return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Update',
        ]);
        
    }

    public function destroy(Request $request) {

        // get data employee
        $retrieve = $request->all();
        $id = base64_decode($retrieve["id"]);

        $find = $this->employeinstance::SelectByFilter(['filterby'=>'id','filter_value'=>$id]);
        if (sizeof($find) == 0) {
            return response()->json([
                'success' => false,
                'message' => 'ID Tidak Ditemukan',
            ]);
        }

        // Soft delete Delete data
        $employee = $this->employeinstance::find($id);
        $employee->is_delete = 1;
        $employee->save(); 

        return response()->json([
            'success' => true,
            'message' => 'Data Telah Berhasil Dihapus',
        ]);

    }

    /**
     *  return data do datatable
     */
    public function datatable(Request $request) {

        // prevent another request except ajax
        if (!$request->ajax()) {
            return response('Forbidden.', 403);
        }

        $filter = $request->query("filter");

        $employee = DB::table('employee')
        ->join('group', 'employee.group', '=', 'group.id')
        ->join('formation', 'employee.formation', '=', 'formation.id')
        ->join('position', 'employee.position', '=', 'position.id')
        ->join('placed_job', 'employee.placed_job', '=', 'placed_job.id')
        ->join('work_unit', 'employee.work_unit', '=', 'work_unit.id')
        ->select(
        'employee.id as id','employee.nip as nip','employee.name as nama', 'position.name as jabatan','placed_job.name as tugas','work_unit.name as unit_kerja')
        ->where('employee.is_delete',0)
        ->where(($filter != "all" ? 'work_unit.id':'work_unit.status'),($filter != "all" ? base64_decode($filter):1))
        ->get();

        $result = array();
        
        foreach ($employee as $value) {
            // re-arrange
            $r = array(
                "nip"=>$value->nip,
                "nama"=>$value->nama,
                "jabatan"=>$value->jabatan,
                "tugas"=>$value->tugas,
                "unit_kerja"=>$value->unit_kerja,
                "action"=>'
                <a href="#" data-id="'.base64_encode($value->id).'" class="update-btn btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                <a href="#" data-id="'.base64_encode($value->id).'" class="delete-btn btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>',
            );
            array_push($result,$r);
        }
        
        
        return response()->json(["data"=>$result,'filter'=>base64_decode($filter),'message'=>'Data berhasil update']);
                
    }


    public function print() {
        $data["employee"] = DB::table('employee')
        ->join('group', 'employee.group', '=', 'group.id')
        ->join('formation', 'employee.formation', '=', 'formation.id')
        ->join('position', 'employee.position', '=', 'position.id')
        ->join('placed_job', 'employee.placed_job', '=', 'placed_job.id')
        ->join('work_unit', 'employee.work_unit', '=', 'work_unit.id')
        ->select(
        'employee.id as id',
        'employee.nip as nip',
        'employee.name as name',
        'employee.born_place as born_place',
        'employee.address as address',
        'employee.born_date as born_date',
        'employee.gender as gender',
        'formation.name as formation',
        'group.name as group',
        'position.name as position',
        'placed_job.name as placed_job',
        'employee.religion as religion',
        'work_unit.name as work_unit',
        'employee.tax_number as tax_number',
        'employee.phone_number as phone_number',
        )
        ->where('employee.is_delete',0)
        ->get();
     
        $pdf = Pdf::loadView('pdf', $data);
     
        return $pdf->stream();
    }

}
