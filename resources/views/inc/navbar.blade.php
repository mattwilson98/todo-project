
<!-- This shows the navigation bar with the links to the home page and the create page this will beincluded in the template file. -->


<nav class="navbar navbar-expand-md navbar">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a><!-- This link takes you to the home page.-->
        </li>
        <li class="nav-item active">
            <a class="nav-link {{ Request::is('todo/create') ? 'active' : '' }}" href="todo/create">Create <span class="sr-only">(current)</span></a><!-- This link takes you to the create page to create a to do -->
        </li>
    </ul>
    </div>
</nav>