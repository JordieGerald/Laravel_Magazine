<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('backend/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Jordie
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ asset('backend/demo1/index.html ') }}">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
									<li>
										<a href="{{ asset('backend/demo2/index.html ') }}">
											<span class="sub-item">Dashboard 2</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a href="{{ route('kategori.index') }}">
								<i class="fas fa-shopping-bag"></i>
								<p>Kategori</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('artikel.index') }}">
								<i class="fas fa-desktop"></i>
								<p>Artikel</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('playlist.index') }}">
								<i class="fas fa-desktop"></i>
								<p>Playlist Video</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('materi.index') }}">
								<i class="fas fa-film"></i>
								<p>Materi Video</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('slide.index') }}">
								<i class="fas fa-th-list"></i>
								<p>Slide Video</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Sidebar Layouts</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="sidebar-style-1.html">
											<span class="sub-item">Sidebar Style 1</span>
										</a>
									</li>
								</ul>
							</div>
							<a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
								<i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
						</li>
					</ul>
				</div>
			</div>
		</div>