<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Plane;
use Excel;

class PlannerMainController extends Controller
{
  public function index(){

return view('layouts.dashbord.app');

  }
  public function excel($plan_id)
  {
    
   $pdf_data = DB::table('plans')->where('id',$plan_id)->get()->toArray();
   $pdf_array[] = array('name', 'project_name', 'start_date', 'tasks');
   foreach($pdf_data as $pdf)
   {
     $pdf_array[] = array(
      'name'  => $pdf->name,
    'project_name'   => $pdf->project()->name,
     'start_date'    => $pdf->start_date,
       'tasks'  => $pdf->tasks->name,
      
      );
 }
  return  Excel::store('Pdf Data', function($excel) use ($pdf_array){
  $excel->setTitle('Pdf Data');
  $excel->sheet('Pdf Data', function($sheet) use ($pdf_array){
  $sheet->fromArray($pdf_array, null, 'A1', false, false);
    });
  })->download('xlsx');
 } 

  public function getExport($plan_id){
   Excel::download('Export data', function($excel) {
  
    $excel->sheet('Sheet 1', function($sheet) {
  
        $plan=Plan::find($plan_id)->table('log_patrols')
        ->join("cms_companies","cms_companies.id","=","log_patrols.id_cms_companies")
        ->join("securities","securities.id","=","log_patrols.id_securities")
        ->select("log_patrols.*","cms_companies.name as nama_companies","securities.name as nama_security")
        ->get();
          
             $data[] = array(
                $plan->name,
                $plan->start_date,
                $plan->project->name,
                $plan->tasks->get(),
               
            );
     
        $sheet->fromArray($data);
    });
  })->export('xls');
  }
  
  

  // public function export_list($plan_id)
  // {
  //   Excel::download('Export data', function($excel) {

  //   $excel->sheet('Sheet', function($sheet) {
  //   $data = Plan::where('id',$plan_id)->get();

  //    $sheet->fromArray($data);
  //   });
  // })->download('xls');
  // }



}
