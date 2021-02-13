
<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #CD853F; color: red;" >
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">
<strong><i class="fa fa-fw fa-home"></i>{{ __('Advocate Diary') }}</strong>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">

</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @else


    @can('permit','case')
        <li class="nav-item">
           <a class="nav-link" href="{{ route('kase.index') }}">{{ __('Case') }}</a>
        </li>
    @endcan

    @can('permit','lawyer')
        <li class="nav-item">
           <a class="nav-link" href="{{ route('lawyer.index') }}">Lawyer</a>
        </li>
    @endcan
    @can('permit','clients')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('client.index') }}">Clients</a>
        </li>
    @endcan
    @can('permit','witness')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('witnes.index') }}">Witnes</a>
        </li>
    @endcan
    @can('permit','court')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('court.index') }}">Court</a>
        </li>
    @endcan
    @can('permit','judge')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('judge.index') }}">Judges</a>
        </li>
    @endcan
    @can('permit','hiring_type')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('hiringtype.index') }}">Hiring Type</a>
        </li>
    @endcan
    @can('permit','hiring_type')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">Case Category</a>
        </li>
    @endcan 
    @can('permit','activity_type')
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Activity</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('activitytype.index') }}">
                        {{ __('Activity Type') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('activitytype.index') }}">Official Activity</a>
                </div>
        </li>
    @endcan
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-left: 0px;">
                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width: 32px; height:32px; position: relative; top: -5px; left: 0px; border-radius: 50%;">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    @can('permit','auth')
                <a class="dropdown-item" href="{{ route('user') }}">
                    {{ __('Users') }}
                </a>
    @endcan
    @can('permit','auth')
                <a class="dropdown-item" href="{{ route('group') }}">
                    {{ __('Groups') }}
                </a>
    @endcan
                <a class="dropdown-item" href="{{ route('user.my') }}">
                    {{ __('My Profile') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
</div>
</div>
</nav>
