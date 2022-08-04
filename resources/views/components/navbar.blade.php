<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('landing') }}">NARACADEMY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item"> 
            <a target="_blank" class="nav-link" href="https://stingy-droplet-bb0.notion.site/Learn-From-Expert-Become-Pro-086e766248bf4e2c99667e4fcf697bb0">BIAYA</a> 
          </li>

          @auth
          @if(Auth::user())
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
              @if(Auth::user()->is_premium == 1)
                <span class="badge bg-primary">Pro</span>
              @else
                <span class="badge bg-danger">Free</span>
              @endif
            </button>
            <ul class="dropdown-menu">
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                             <i class="fa fa-sign-out"></i>{{ __('Logout') }}
                     </x-jet-dropdown-link>
                </form>
              </li>
              
            </ul>
          </div>
          @endif
          @endauth
          @guest
          <li class="nav-item"> 
            <a class="nav-link btn btn-info me-4 ms-2" href="{{ route('dashboard') }}">MASUK AKUN</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link btn btn-primary" href="{{ route('register') }}">DAFTAR</a>
          </li>
          @endguest

        </ul> 
      </div>
    </div>
  </nav>