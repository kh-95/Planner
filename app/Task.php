<?php

namespace App;
use App\Plan;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use DB;
class Task extends Model
{
    protected $fillable=['name','num_hours','order','plan_id','type'];

    
    protected $appends=['start','end'];

    protected $guarded = [];

    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    public function getStartAttribute(){

     $plan=Plan::findorfail($this->plan_id);  
     $start=$plan->start_date;


     $tasks=Task::findorfail($this->plan_id);
  
return $start;

}
 

public function getEndAttribute(){
    $plan=Plan::findorfail($this->plan_id); 
    $time_plane=$plan ->start_date;

    
    if($this->num_hours < 7){

 $end = Carbon::parse($time_plane)->addHour($this->num_hours);
      
return $end;
    }
    else{
   $end=Carbon::parse($plan->start_date)->addDays(1)->addHour($this->num_hours)
   
   ;

return $end;
    }




    
//     $timeArr = explode(':', $time_plan);
// $end=$this->num_hours+$timeArr[0];
// return $end;
}






}
