<div id="headerMenuCollapse" class="col-sm-12 col-md-3 col-lg-2 collapse d-md-flex align-items-start mt-3">
  <div class="list-group list-group-transparent mb-2 sidebar">
    <span class="sidebar-heading pl-0 pt-2 pb-2">
      <i class="fas fa-compass mr-2"></i>
      Administrativo
    </span>

    <a class="list-group-item list-group-item-action" aria-current="page" href="{{ route('home') }}">
      <span class="icon mr-2">
        <i class="fas fa-home"></i>
      </span>
      Página inicial
    </a>
    <a class="list-group-item list-group-item-action" href="{{route('users.index')}}">
      <span class="icon mr-2">
        <i class="fas fa-users"></i>
      </span>
      Administradores
    </a>
    <a class="list-group-item list-group-item-action" href="{{route('features.index')}}">
      <span class="icon mr-2">
        <i class="far fa-file-alt"></i>
      </span>
      Características
    </a>
    <a class="list-group-item list-group-item-action" href="{{route('plants.index')}}">
      <span class="icon mr-2">
        <i class="fas fa-seedling"></i>
      </span>
      Plantas
    </a>
    <a class="list-group-item list-group-item-action" href="{{ route('crosPlant.index') }}">
      <span class="icon mr-2">
       <i class="fas fa-plus"></i>
     </span>
     Cruzar Planta
   </a>
 </div>
</div>
