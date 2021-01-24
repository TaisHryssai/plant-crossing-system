<div class="fixed-top header py-1">
  <div class="container-fluid">
    <div class="d-flex">
      <a class="header-brand mr-0" href="./index.html">
        <img src="{{ asset('assets/images/icon-plant.png') }}" class="header-brand-img" alt="tabler logo">
      </a>
      <span class="d-lg-block mt-1 text-muted font-weight-bold mt-3">
        TESTE TEOREMA
      </span>
      <div class="d-flex order-lg-2 ml-auto">
        <div class="dropdown">
          <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">

            
            <span class="ml-2 d-none d-lg-block">
            <span class="avatar avatar-sm mr-2" style="background-image: url('../assets/images/default/default-user.png')"></span>
              <span class="text-default">  {{ Auth::user()->name }}</span>
              <small class="text-muted d-block mt-1">  {{ Auth::user()->email }}</small>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

            <a class="dropdown-item" href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>

        </div>
      </div>
    </div>
    <a href="#" class="header-toggler d-lg-none d-md-none ml-3" data-toggle="collapse" data-target="#headerMenuCollapse" aria-expanded="true">
      <i class="fas fa-align-justify "></i>
    </a>
  </div>
</div>
</div>