@extends('layouts.dashbord.app')
@section('content')


 <h1>Projects<small></small></h1>


 @livewireStyles


 
 <div class="card-body ">
  @livewire('projectcrud')            
                
              </div> 
            






              @livewireScripts


@endsection