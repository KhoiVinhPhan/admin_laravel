<header class="header">
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-holder d-flex align-items-center justify-content-between">
        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="{{ route('home') }}" class="navbar-brand">
          <div class="brand-text hidden-sm-down"><strong class="text-primary">Trang quản trị hệ thống</strong></div></a></div>
          @if (Auth::check())
              <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            <li class="dropdown">
              <a href="{{ route('giaodien') }}" target="_blank" title="Giao diện trang chủ"><span class="icon-home"> Giao diện</span></a>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} là
                <span class="label label-success">{{ Auth::user()->roles->pluck('name')->first() }}</span>
                <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        </ul>
          @endif
          

      </div>
    </div>
  </nav>
  </header>