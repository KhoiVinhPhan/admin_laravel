<nav class="side-navbar">
	<div class="side-navbar-wrapper">
		<div class="sidenav-header d-flex align-items-center justify-content-center">
			<div class="sidenav-header-inner text-center"><img src="../../../../backend/img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
				<h2 class="h5 text-uppercase">Khoivinh</h2><span class="text-uppercase">Web Developer</span>
			</div>
			<div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
		</div>
		<div class="admin-menu">
			<ul id="side-admin-menu" class="side-menu list-unstyled">
				<li class="{{ Request::is('administrator') ? 'active' : '' }}"><a href="{{ route('home') }}"> <i class="icon-home"></i><span>Trang chủ</span></a></li>
				<li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Quản trị hệ thống</span>
					<div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
					<ul id="pages-nav-list" class="collapse list-unstyled">
						@if (Auth::check())
                            @can('view_users')
                                <li class="{{ Request::is('administrator/users*') ? 'active' : '' }}">
                                    <a href="{{ route('users.index') }}">
                                        <span class="text-info glyphicon glyphicon-user"></span> Tài khoản
                                    </a>
                                </li>
                            @endcan
                        @endif
						@if (Auth::check())
                            @can('view_roles')
                            <li class="{{ Request::is('administrator/roles*') ? 'active' : '' }}">
                                <a href="{{ route('roles.index') }}">
                                    <span class="text-danger glyphicon glyphicon-lock"></span> Quyền và chính sách
                                </a>
                            </li>
                            @endcan
                        @endif
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>