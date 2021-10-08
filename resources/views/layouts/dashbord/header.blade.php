<header class="app-header">
				<div class="container-fluid">
					<div class="row gutters">
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
							<a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
								<i class="icon-menu5"></i>
							</a>
							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
								<i class="icon-chevron-thin-left"></i>
							</a>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">
							<a href="/dashbord/index.html" class="logo">
								<img src="/dashbord/img/unify.png" alt="Unify Admin Dashboard" />
							</a>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
							<ul class="header-actions">
								<li class="dropdown">
								
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
										<ul class="imp-notify">
											<li>
												<div class="icon">W</div>
												<div class="details">
													<p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
												</div>
											</li>
											<li>
												<div class="icon">J</div>
												<div class="details">
													<p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
												</div>
											</li>
											<li>
												<div class="icon secondary">R</div>
												<div class="details">
													<p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li>
								
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
										<ul class="stats-widget">
				              <li>
				                <h4>$37895</h4>
				                <p>Revenue <span>+2%</span></p>
				                <div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
														<span class="sr-only">87% Complete (success)</span>
													</div>
												</div>
				              </li>
				              <li>
				                <h4>4,897</h4>
				                <p>Downloads <span>+39%</span></p>
				                <div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
														<span class="sr-only">65% Complete (success)</span>
													</div>
												</div>
				              </li>
				              <li>
				                <h4>2,219</h4>
				                <p>Uploads <span class="text-secondary">-7%</span></p>
				                <div class="progress">
													<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
														<span class="sr-only">42% Complete (success)</span>
													</div>
												</div>
				              </li>
				            </ul>
				          </div>
								</li>
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<img class="avatar" src="/dashbord/img/user.png" alt="User Thumb" />
										<span class="user-name">{{auth()->user()->name}}</span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="/dashbord/profile.html">
													<div class="icon">
														<i class="icon-account_circle"></i>
													</div>
													<p>Profile</p>
												</a>
											</li>
											<li>
												<a href="/dashbord/profile.html">
													<div class="icon red">
														<i class="icon-cog3"></i>
													</div>
													<p>Settings</p>
												</a>
											</li>
											<li>
												<a href="/dashbord/filters.html">
													<div class="icon yellow">
														<i class="icon-schedule"></i>
													</div>
													<p>Activity</p>
												</a>
											</li>
										</ul>
										<div class="logout-btn">
											<a href="/dashbord/login.html" class="btn btn-primary">Logout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>