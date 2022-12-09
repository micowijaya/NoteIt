<nav class="navbar navbar-expand-lg" style="background-color: #98A8F8;">
    <div class="container">
        @guest
        <a class="navbar-brand" href="/" style="font-size: 24px;"><b><i>NoteIt!</i></b></a>
        @else
        <a class="navbar-brand" href="/home" style="font-size: 24px;"><b><i>NoteIt!</i></b></a>    
        @endguest

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav ms-auto" style="font-size: 18px;">
            @guest
            <a class="nav-link active me-3 fw-bold" aria-current="page" href="/">Home</a>
            <a class="nav-link active me-3 fw-bold" aria-current="page" href="/login">Login</a>
            <a href="/register" class="btn w-50 btn-reg" style="font-size: 18px;"><b>Register</b></a>
            @else
            <a class="nav-link active me-3 fw-bold" aria-current="page" href="/home">My Notes</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile" style="color: black !important" href="#">Edit Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item" style="color: black !important" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                    @csrf
                </form>
              </ul>
            </li>   
            @endguest
            
            
            
          </div>
        </div>
    </div>
</nav>