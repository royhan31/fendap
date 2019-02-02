<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('home')}}">
        <i class="mdi mdi-airplay menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item @if(url('home.tour')){
    {{Request::is('home/tour/create') ? 'active' : ''}}
  }@endif

  @if(url('home.tour')){
    {{Request::is('home/tour/edit/*') ? 'active' : ''}}
  }@endif">
      <a class="nav-link" href="{{route('tour')}}">
        <i class="mdi mdi-folder-image menu-icon"></i>
        <span class="menu-title">Pariwisata</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('category')}}">
        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
        <span class="menu-title">kategori</span>
      </a>
    </li>
  </ul>
</nav>
