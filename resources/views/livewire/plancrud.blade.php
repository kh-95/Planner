<div>
   
@include('livewire.plans.create')
@include('livewire.plans.update')
  


<div class="card-header">Basic Datatable</div>
<div class="card-body">

<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
													
													<th>ProjectName</th>
													
													<th>StartDate</th>
													<th>Tasks</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
                                                @foreach($plans as $plan)
												<tr>
													<td>{{$plan->name}}</td>
                                                    <td>{{$plan->project->name}}</td>
													<td>{{$plan->start_date}}</td>
													@if(auth()->user()->role=='admin')
										<td><a href="{{url('planner/tasks',['plan_id'=>$plan->id])}}" class="btn btn-primary btn-sm">AddTask</a>
			
			@endif
			@if(auth()->user()->role=='user')
										<td><a href="{{url('user/tasks',['plan_id'=>$plan->id])}}" class="btn btn-primary btn-sm">AddTask</a>
			
			@endif
			
										<!-- <a href="{{url('planner/free_tasks',['plan_id'=>$plan->id])}}" class="btn btn-primary btn-sm">Free_Task</a> -->
										
										
										
										</td>
												
													<td>
<button class="btn btn-sm btn-info " data-toggle="modal" data-target="#updateModal"   wire:click="edit({{$plan->id}})">Edit</button>
<button class="btn btn-sm btn-danger "  wire:click.prevent="delete({{$plan->id}})">Delete</button>
<a href=" {{url('planner/excel',['plan_id'=>$plan->id])}} "><button   class="btn btn-sm btn-warning">Export</button>



                                                    </td>
												</tr>
							@endforeach
												
											</tbody>
										</table>
									</div>
						
</div>
