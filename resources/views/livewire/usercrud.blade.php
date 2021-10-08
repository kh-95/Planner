<div>

  



@include('livewire.users.create')


@include('livewire.users.update')


									<div class="card-header">Basic Datatable</div>
									<div class="card-body">
										<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>Password</th>
													<th>Role</th>
													
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($users as $user)
												<tr>
													<td>{{$user->name}}</td>
													<td>{{$user->email}}</td>
													<td>{{$user->password}}</td>
													<td>{{$user->role}}</td>
													<td>
<button class="btn btn-sm btn-info " data-toggle="modal" data-target="#updateModal"   wire:click="edit({{$user->id}})">Edit</button>
<button class="btn btn-sm btn-danger "  wire:click.prevent="delete({{$user->id}})">Delete</button>


                                                    </td>
												</tr>
							@endforeach
												
											</tbody>
										</table>
									</div>
								


</div>

