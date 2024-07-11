<!-- resources/views/includes/header.blade.php -->
<header>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Welcome</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/service') }}">Service</a></li>
        </ul>
    </nav>
</header>
<style>
    nav ul {
        list-style-type: none;
        padding: 0;
    }
    nav ul li {
        display: inline;
        margin-right: 10px;
    }
</style>
