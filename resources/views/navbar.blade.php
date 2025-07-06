<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<div class="navbar">
    <div class="logo">
        <div class="logo-circle">I</div>
        Irma.
    </div>
    <div class="nav-links">
        <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
        <a href="{{ url('/service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
        <a href="{{ url('/education') }}" class="{{ Request::is('education') ? 'active' : '' }}">Education</a>
        <a href="{{ url('/projects') }}" class="{{ Request::is('projects') ? 'active' : '' }}">Projects</a>
        <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
    </div>
</div>