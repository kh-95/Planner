@extends('layouts.dashbord.app')
@section('content')


 <h1>Tasks<small></small></h1>


 @livewireStyles


 
 <div class="card-body ">
  @livewire('taskcrud')            
                
              </div> 
            






              @livewireScripts


@endsection