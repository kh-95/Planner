<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-actions -->
						<ul class="user-actions">
							<li>
								<a href="#">
									<i class="icon-event_note"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-rate_review"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-drafts"></i>
									<span class="count-label red"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-assignment_turned_in"></i>
									<span class="count-label"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-photo_camera"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Secured">
									<i class="icon-verified_user"></i>
								</a>
							</li>
						</ul>
						<!-- END .user-actions -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li class="active selected">
									<a href="#" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboards</span>
									</a>
									<ul aria-expanded="false" class="collapse in">
										<li>
											<a href='/dashbord/index.html' class="current-page">Dashboard</a>
										</li>
										@if(auth()->user()->role=='admin')
										<li>
											<a href="{{url('planner/admin')}}">Users</a>
										</li>
										@endif
										
@if(auth()->user()->role=='admin')
										<li>
											<a href="{{url('planner/projects')}}">Projects</a>
										</li>
						@endif

						@if(auth()->user()->role=='user')
										<li>
<a href="{{url('user/projects')}}">Projects</a>
										</li>
						@endif					
									
									</ul>
								</li>
				
							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->