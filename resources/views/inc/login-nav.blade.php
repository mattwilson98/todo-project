
<!-- This shows the navigation bar with the links to the home page and the create page this will beincluded in the template file. -->


<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false" ><title>Menu</title><path stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link {{ Request::is('/login') ? 'active' : '' }}" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/register') ? 'active' : '' }}" href="{{ route('register') }}">register</a>
      </li>
    </ul>
  </div>
</nav>