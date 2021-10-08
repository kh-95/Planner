<?php

namespace App\Http\Controllers\Admin;

use App\Plan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PlansExport implements FromView
{ 
    public $plan_id;
public function __construct()
    {
        $plan_id=$this->plan_id;
    }

    public function view(): View
    {
        $plan_id=request()->plan_id;
       
        return view('exports.plans', [
            'plans' => Plan::where('id',$plan_id)->get()
        ]);
    }
    public function export() 
    {
    return Excel::download(new PlansExport, 'plans.xlsx');
    }

}
?>