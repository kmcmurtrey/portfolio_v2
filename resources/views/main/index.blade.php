@extends('app')

@section('content')
<header class="header-wrapper">
    <h3 class="title">Korey McMurtrey</h3>

    <nav class="main-nav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Projects</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="main-container">
    <div class="hero">
        <h1>Web developer.</h1>
        <p>My name is Korey McMurtrey, a graduate of Code Louisville, and this is my portfolio.</p>
    </div>

    <section>
        <img src="" alt="">
        <div>
            <h2>PHP Project</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <ul class="tech">
                <li>PHP</li>
                <li>MySQL</li>
            </ul>
        </div>
    </section>

    <section>
        <img src="" alt="">
        <div>
            <h2>Lutes Dental Office</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <ul class="tech">
                <li>HTML/CSS</li>
                <li>jQuery</li>
                <li>Foundation</li>
            </ul>
        </div>
    </section>
</div>

@stop