<div>
 




									<div class="card-header">Basic Datatable</div>
									<div class="card-body">
										<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
													
												
													
													<th>Created_at</th>
													<th>Plans</th>
												
													
												</tr>
											</thead>
											<tbody>
                                                @foreach($projectsuser as $project)
												<tr>
													<td>{{$project->name}}</td>
                                                    
													<td>{{$project->created_at}}</td>
													<td><a href="{{url('user/plans',['project_id'=>$project->id])}}" class="btn btn-primary btn-sm">Add_Plan</a></td>
												
												
												</tr>
							@endforeach
												
											</tbody>
										</table>
									</div>
								

</div>
