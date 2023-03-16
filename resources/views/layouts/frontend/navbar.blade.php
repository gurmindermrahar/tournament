<nav class="navbar navbar-toggleable-md navbar-light bg-faded sticky-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="nav-left">
    <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link home-icon" href="{{route('home')}}"><i mi-name="home" class="material-icons navigation-icon"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('getTournaments')}}">Tournaments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('getCashMatches')}}">Cash Match</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disable" href="#">Ranked</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Extra
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><i mi-name="games" class="material-icons navigation-icon"></i>Current Match</a>
            <a class="dropdown-item" href="#"><i mi-name="shopping_basket" class="material-icons navigation-icon"></i>Shop</a>
            <a class="dropdown-item" href="#"><i mi-name="question_answer" class="material-icons navigation-icon"></i>FAQ</a>
          </div>
        </li>
    </ul>
  </div>

  <a class="navbar-brand mx-auto" href="#"><div id="logo"><img src="{{url('assets/frontend/images/logo.jpg')}}" alt="logo"></div></a>

  <div class="collapse navbar-collapse right-nav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link pr-5" href="#"><i mi-name="search" class="material-icons navigation-icon"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link icon pr-5 notification" href="#">
          <i mi-name="notifications_none" class="material-icons navigation-icon"></i>
          <span class="counter">1689</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i mi-name="chat" class="material-icons navigation-icon"></i></a>
      </li>
      @if($user)
      <li class="nav-item dropdown user-profile">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i mi-name="account_circle" class="material-icons navigation-icon"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('userProfile')}}"><i mi-name="chrome_reader_mode" class="material-icons navigation-icon"></i>Profile</a>
          <a class="dropdown-item" href="{{route('createOrg')}}"><i mi-name="view_list" class="material-icons navigation-icon"></i>Organize Tournament</a>
          <a class="dropdown-item" href="{{route('addTournament')}}"><i mi-name="add" class="material-icons navigation-icon"></i>Add Tournament</a>
          <a class="dropdown-item" href="{{route('userSettings')}}"><i mi-name="chrome_reader_mode" class="material-icons navigation-icon"></i>Settings</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i mi-name="power_settings_new" class="material-icons navigation-icon"></i>Log Out
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}"><i mi-name="home" class="material-icons navigation-icon exit_to_app"></i></a>
      </li>
      @endif
    </ul>
  </div>

  <!-- Mobile -->
  <div class="collapse" id="navbarMobile">
      <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Mobile Link</a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="#">Mobile Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mobile Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mobile Link</a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="#">Mobile Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mobile Link</a>
        </li>
      </ul>
  </div>
</nav>
