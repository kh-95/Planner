<div>
 



@include('livewire.projects.create')


@include('livewire.projects.update')


									<div class="card-header">Basic Datatable</div>
									<div class="card-body">
										<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
													
													<th>User</th>
													
													<th>Created_at</th>
													<th>Plans</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
                                                @foreach($projects as $project)
												<tr>
													<td>{{$project->name}}</td>
                                                    <td>{{$project->user->name}}</td>
													<td>{{$project->created_at}}</td>
													<td><a href="{{url('planner/plans',['project_id'=>$project->id])}}" class="btn btn-primary btn-sm">AddPlan</a></td>
												
													<td>
<button class="btn btn-sm btn-info " data-toggle="modal" data-target="#updateModal"   wire:click="edit({{$project->id}})">Edit</button>
<button class="btn btn-sm btn-danger "  wire:click.prevent="delete({{$project->id}})">Delete</button>



                                                    </td>
												</tr>
							@endforeach
												
											</tbody>
										</table>
									</div>
								

</div>
