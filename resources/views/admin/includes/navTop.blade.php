

<div class="navbar-logo">
<a class="mobile-menu" id="mobile-collapse" href="#">
<span class="glyphicon glyphicon-th-list"></span>
</a>
<a href="{{ url('/home') }}">
Ehsan Software
<a class="mobile-options">
</a>

</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">

<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="feather icon-maximize full-screen"></i>
</a>
</li>
</ul>

<ul class="nav-right">


<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="{{ asset('admin') }}/files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<span>Ehsan Soft</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

<li>
<a href="javascript:void(0)">
<i class="feather icon-user"></i> Profile
</a>
</li>


<li>

<a  href="{{ route('logout') }}"
   onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
    <i class="feather icon-log-out"></i>{{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>
