<!-- Navigation -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('larastart.website_name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li @if(Request::is('/') || Request::is('home')) class="active" @endif><a
                            href="{{ url('home') }}">Home</a></li>
                <li @if(Request::is('about')) class="active" @endif><a href="{{ url('about') }}">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        How To <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li @if(Request::is('how-to/create-a-static-page')) class="active" @endif><a
                                    href="{{ url('how-to/create-a-static-page') }}"><i class="fa fa-pagelines"></i>
                                Create a Page</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li @if(Request::is('login')) class="active" @endif><a href="{{ url('login') }}">Login</a></li>
                    <li @if(Request::is('register')) class="active" @endif><a href="{{ url('register') }}">Register</a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ auth()->user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(auth()->user()->hasRole('administrator'))
                                <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-lock"></i> Admin CP</a></li>
                                <li class="divider"></li>
                            @endif
                            <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                            <li><a href="{{ url('profile/' . auth()->user()->username) }}"><i class="fa fa-user"></i>
                                    Your Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('settings/edit-profile') }}"><i class="fa fa-edit"></i> Edit Profile</a>
                            </li>
                            <li><a href="{{ url('settings/edit-settings') }}"><i class="fa fa-cog"></i> Edit
                                    Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- /Navigation -->