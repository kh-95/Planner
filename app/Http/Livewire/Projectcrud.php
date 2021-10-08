<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Project;
use App\User;

class Projectcrud extends Component
{

  public $projects , $users, $name  ,$user_id, $project_id;  
  
    public function render()
    {  
      

$user=auth()->user()->role;

if($user=='admin'){
$this->projects=Project::all();
        
  $this->users=User::where('role','user')->get();

return view('livewire.projectcrud');
}else{
  $user=auth()->user()->id;

  $projectsuser=Project::where('user_id',$user)->get();

return view('livewire.userproject',compact('projectsuser'));
}
    }
    public function rest(){
        $this->name='';
        $this->user_id='';
       
        }
        
        public function store(){
    
            $this->validate([
           'name'=>'required',
           'user_id'=>'required',
         
            ]);
              
            
              Project::Create([
                'name'=>$this->name,
               'user_id'=>$this->user_id,
             ]
           );
           
           
             $this->rest();   
              $this->emit('projectStore');
              
               }
               public function edit($id){

      
                $editproject=Project::findOrFail($id);
                
                $this->project_id=$id;
                $this->name=$editproject->name;
            
                $this->user_id=$editproject->user_id;
                
                }
                
                public function update(){
                
                 $this->validate([
                'name'=>'required',
                
                'user_id'=>'required',
                ]);
                
                $updateproject=project::findOrfail($this->project_id);
                $updateproject->update([
                    'name'=>$this->name,
                    'user_id'=>$this->user_id,
                    
                ]);
                       $this->rest();
                       $this->emit('projectStore');
                    }
                
public function delete($id){
                
Project::find($id)->delete();
                
}










}
