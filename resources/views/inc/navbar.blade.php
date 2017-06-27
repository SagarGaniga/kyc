<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="/home">Home <span class="sr-only">(current)</span></a></li>
      <li><a href="/college">College</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admission <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/procedure">Procedure</a></li>
          <li><a href="/updates">Updates</a></li>
          <li><a href="/prev">Previous Year Cutoffs</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">University <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Syllabus</a></li>
          <li><a href="#">Discussion</a></li>
          <li><a href="#">Books to refer</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Recomonded Books</a></li>
          <li><a href="#">Buy and Sell Books</a></li>
          {{-- <li><a href="#">Previous Year Cutoffs</a></li> --}}
        </ul>
      </li>
      <li><a href="/collegeFinder">College Finder</a></li>
      <li><a href="#">College Comparer</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search College">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
        <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
  </div>
</nav>