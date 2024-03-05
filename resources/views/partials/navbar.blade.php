
    @auth
    <header id="header" class="header fixed-top d-flex align-items-center ">
        <div class="d-flex align-items-center justify-content-between">
            <a class="navbar-brand logo d-flex align-items-center" href="{{ url('/home') }}">
                <span class=" d-lg-block d-sm-block">{{ config('app.name', 'GESTIONAPP') }}</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <nav class="header-nav ms-auto ">
            
        
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            
            <ul class="d-flex align-items-center">
                
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-user fs-4"></i>
                        <span class=" d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                          <span class="d-lg-none dropdown-item d-flex align-items-center">{{ Auth::user()->name }}</span>
                        </li>
                        <li >

                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
    </header>

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item">
            <a class="nav-link " href="/home">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li>
          
          
          @if(count(auth()->user()->companies) >= 1)
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Empresas</span>
            </a>
          </li><!-- End Dashboard Nav -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Pedidos</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="#">
                  <i class="bi bi-circle"></i><span>Todos</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-circle"></i><span>En proceso</span>
                </a>
              </li>
              
            </ul>
          </li><!-- End Components Nav -->
    
          <li class="nav-item">
            <a class="nav-link " href="register-company">
              <i class="fa-solid fa-user-group"></i>
              <span>Crear o unirse a un grupo</span>
            </a>
          </li><!-- End Dashboard Nav -->
          @else
            <li class="nav-item">
              <a class="nav-link " href="register-company">
                <i class="fa-solid fa-user-group"></i>
                <span>Crear o unirse a un grupo</span>
              </a>
            </li><!-- End Dashboard Nav -->
          @endif
         
        </ul>
        
      </aside><!-- End Sidebar-->
    @else
    <header id="header" class="header fixed-top d-flex align-items-center ">
        <div class="d-flex align-items-center justify-content-between">
            <a class="navbar-brand logo d-flex align-items-center" href="{{ url('/') }}">
                <span class=" d-lg-block d-sm-block">{{ config('app.name', 'GESTIONAPP') }}</span>
            </a>
            
        </div>  
        <nav class="header-nav ms-auto">


                    <!-- Right Side Of Navbar -->
                    <ul class="d-flex align-items-center">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item mx-3">
                                    <a class="nav-link fw-bold" href="{{ route('login') }}"> {{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item mx-3">
                                    <a class="nav-link fw-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        
                            
                        @endguest
                        
                    </ul>
              
            
        </nav>
    </header>
    @endauth


        
    
