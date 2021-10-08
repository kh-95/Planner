<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Plan;
use App\Project;
use App\Http\Controllers\Admin\PlansExport;
use Excel;




class Plancrud extends Component
{


    public $plans,$project_id, $name , $start_date ,$plan_id;
    
   
    public function render()
    {
      if(!$this->project_id)
     $this->project_id=request()->segment(3);
    
  $this->plans=Plan::where('project_id',$this->project_id)->get();
        
return view('livewire.plancrud');
    }
    
    public function rest(){
        $this->name='';
        $this->start_date='';
       
        }
       
        
        public function store(){
    
            $this->validate([
           'name'=>'required',
           'start_date'=>'required',
           
         
            ]);
              
            
              Plan::Create([
                'name'=>$this->name,
                'start_date'=>$this->start_date,
                'project_id'=>$this->project_id,
               
             ]
           );
           
           
             $this->rest();   
              $this->emit('planStore');
              
               }
               public function edit($id){

      
                $editplan=Plan::findOrFail($id);
                
                $this->plan_id=$id;
                $this->name=$editplan->name;
            
                $this->project_id=$editplan->project_id;
                
                }
                
                public function update(){
                
                 $this->validate([
                'name'=>'required',
                
                'start_date'=>'required',
                ]);
                
                $updateplan=Plan::findOrfail($this->plan_id);
                $updateplan->update([
                    'name'=>$this->name,
                    'start_date'=>$this->start_date,
                    
                ]);
                       $this->rest();
                       $this->emit('planStore');
                    }
                
public function delete($id){
                
Plan::find($id)->delete();
                
}
public function export() 
{
return Excel::download(new PlansExport, 'plans.xlsx');
}











}
