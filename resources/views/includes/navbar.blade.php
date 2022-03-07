<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 bg-white ">
    <div class="container justify-content-between">
        <div>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logokm.png') }}" alt="logo kampus merdeka" style="width: 80px"></a>
        </div>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{ (request()->routeIs('home') ? 'active' : '') }}" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('student') ? 'active' : '') }}" href="{{ route('student') }}">Siswa</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->routeIs('book') ? 'active' : '') }}" href="{{ route('book') }}">Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->routeIs('category') ? 'active' : '') }}" href="{{ route('category') }}">Kategori Buku</a>
                </li>
            </ul>
        </div>
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