<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Usercrud extends Component
{
    public $name , $email , $password, $phone,$role, $users,$user,$user_id;
    public function render()
    {

        $this->users=User::all();
        return view('livewire.usercrud');
    }

    public function rest(){
        $this->name='';
        $this->email='';
        $this->password='';
        $this->role='';
        }
        public function store(){
    
            $this->validate([
           'name'=>'required',
           'email'=>'required',
           'password'=>'required',
         'role' => 'required',
            ]);
              
        
              User::Create([
                'name'=>$this->name,
               'email'=>$this->email,
               'password'=>md5($this->password),
           'role'=>$this->role,
          
             ]
           );
           
           
             $this->rest();   
              $this->emit('userStore');
               }
               public function edit($id){

      
                $edituser=User::findOrFail($id);
                
                $this->user_id=$id;
                $this->email=$edituser->email;
                $this->password=md5($edituser->password);
                $this->name=$edituser->name;
                $this->role=$edituser->role;
                
                }
                
                public function update(){
                
                 $this->validate([
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|min:6',
                'role'=>'required',
                ]);
                
                $updateuser=User::findOrfail($this->user_id);
                $updateuser->update([
                    'name'=>$this->name,
                    'email'=>$this->email,
                    'password'=>md5($this->password),
                    'role'=>$this->role,
                ]);
                       $this->rest();
                       $this->emit('userStore');
                    }
                
public function delete($id){
                
User::find($id)->delete();
                
}



}
