<style>
    .menu-active {
        color: black !important;
        font-weight: bold;
    }
</style>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light  bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }}" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'menu-active' : '' }}" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('services') ? 'menu-active' : '' }}"
                            href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('blog') ? 'menu-active' : '' }}" href="blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'menu-active' : '' }}" href="contact">Contact</a>
                    </li>
                  </ul>
                  @if (Auth::check())
                  <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-user fa-fw"></i> {{ auth()->user()->name }}
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#!"
                                      onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                              </li>
                              {!! Form::open(['route' => ['auth.logout'], 'method' => 'POST', 'id' => 'form-logout']) !!}
                              {!! Form::close() !!}
                          </ul>
                      </li>
                  </ul>
                  @else
                  <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                    <li class="nav-item">
                      <a href="{{ route('dashboard.index') }}" class="btn btn-primary"> Login</a>
                      <a href="{{ route('register.index') }}" class="btn btn-success"> Register</a>
                    </li>
                  </ul>
                  @endif
            </div>
        </div>
    </nav>
</header>
