<div>
   
@include('livewire.tasks.create')
@include('livewire.tasks.update')
  


<div class="card-header">Basic Datatable</div>
<div class="card-body">

<table id="basicExample " class="table table-striped table-bordered taskdata" >
											<thead>
												<tr>
													<th>Name</th>
                                                    <th>Plane_Name</th>
												
													<th>Num_Hours</th>
													
													<th>Order</th>
													<th>Start</th>
													<th>End</th>
													<th>Type</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody class="task">
                                                @foreach($tasks as $task)
												<tr id="rowt"  >
													<td>{{$task->name}}</td>
                                                    <td>{{$task->plan->name}}</td>
													<td>{{$task->num_hours}}</td>
													<td >{{$task->order}}</td>
													<td id="start"  >{{$start}}</td>
													<td id="end" >
													@if($task->num_hours < 7)
{{$end = \Carbon\Carbon::parse($task->plan->start_date)->addHour($task->num_hours)}}
@else
  {{$end=\Carbon\Carbon::parse($task->plan->start_date)->addDays(1)->addHour($task->num_hours)}}
  @endif
</td>
	@php
if($tasks->count()>1){$start=$task->end;}
@endphp
<td>{{$task->type}}</td>
						<td>
<button class="btn btn-sm btn-info " data-toggle="modal" data-target="#updateModal"   wire:click="edit({{$task->id}})">Edit</button>
<button class="btn btn-sm btn-danger "  wire:click.prevent="delete({{$task->id}})">Delete</button>



                                                    </td>
												</tr>
							@endforeach
											</tbody>
										</table>
									</div>
						

</div>