<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;
use App\Plan;
use Carbon\Carbon;
use DB;

class Taskcrud extends Component
{
    public $plan_id, $name ,$order,$num_hours,$task_id,$type;
    public function render()
    {
        if(!$this->plan_id)
        $this->plan_id=request()->segment(3);
        
        $plan=Plan::find($this->plan_id);
      
        $start=$plan->start_date;
        $num_hours=$this->num_hours;
        $tasks=Task::where('plan_id',$this->plan_id)->get();
        return view('livewire.taskcrud',compact('start','num_hours','tasks'));
    }
    public function rest(){
        $this->name='';
        $this->num_hours='';
        $this->order='';
        $this->type='';
        }
       
        
        public function store(){
    
            $this->validate([
           'name'=>'required',
           'num_hours'=>'required',
           'type'=>'required',
           ]);

    

           if($this->order== null){
$order_max=Task::where('plan_id',$this->plan_id)->max('order');


$this->order=$order_max+1;

}


       

           
              
            Task::Create([
                'name'=>$this->name,
               'num_hours'=>$this->num_hours,
               'order'=>$this->order,
               'plan_id'=>$this->plan_id,
               'type'=>$this->type,
             ]); 
             
           
           
           
           
             $this->rest();   
              $this->emit('taskStore');
              
               }
               public function edit($id){

      
                $edittask=task::findOrFail($id);
                
                $this->task_id=$id;
                $this->name=$edittask->name;
                $this->num_hours=$edittask->num_hours;
                $this->order=$edittask->order;
                $this->type=$edittask->type;
                $this->plan_id=$edittask->plan_id;
                
                }
                
                public function update(){
                
                 $this->validate([
                'name'=>'required',
                'num_hours'=>'required',
                'order'=>'required',
                'type'=>'required',
                
                ]);
                
                $updatetask=Task::findOrfail($this->task_id);
                $updatetask->update([
                    'name'=>$this->name,
                    'num_hours'=>$this->num_hours,
                    'order'=>$this->order,
                    'type'=>$this->type,
                   
                    
                ]);
                       $this->rest();
                       $this->emit('taskStore');
                    }
                
public function delete($id){
                
Task::find($id)->delete();
                
}




}
