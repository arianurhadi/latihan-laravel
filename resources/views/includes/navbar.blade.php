<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logokm.png') }}" alt="logo kampus merdeka" style="width: 80px"></a>
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link {{ (request()->routeIs('home') ? 'active' : '') }}" aria-current="page" href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->routeIs('buku') ? 'active' : '') }}" href="{{ route('buku') }}">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->routeIs('kategori') ? 'active' : '') }}" href="{{ route('kategori') }}">Kategori Buku</a>
            </li>
        </ul>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Jhon Doe
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Dashboard</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
        </div>
    </div>
  </nav>