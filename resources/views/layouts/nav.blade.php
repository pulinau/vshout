                    <nav class="main-menu">
<div class="navbar-header">
    <!-- Toggle Button -->      
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    
</div>

<div class="navbar-collapse collapse clearfix">                                                                                              
    <ul class="navigation">
        <li class="current dropdown"><a href="/">Home</a>
        </li>
        <li class="dropdown">
            <a href="/browse">Event</a>
        </li>
        <li class="dropdown"><a href="/contact">Contact</a>
        </li>
        @guest
            <li class="dropdown">
                <a href="/login">Login</a>
            </li>
            <li class="dropdown">
                <a href="/register">Register</a>
            </li>

        @else
            <li class="dropdown">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        @endguest
    </ul>
</div>
</nav>