@extends('layouts.dashbord.app')
@section('content')


 <h1>Plans<small></small></h1>


 @livewireStyles


 
 <div class="card-body ">
  @livewire('plancrud')            
                
              </div> 
            






              @livewireScripts


@endsection