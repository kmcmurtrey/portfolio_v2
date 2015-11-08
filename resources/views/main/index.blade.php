@extends('app')

@section('content')
    <header class="navigation" role="banner">
        <div class="navigation-wrapper">
            <h4 class="logo">Korey McMurtrey</h4>
            <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
            <nav role="navigation">
                <ul id="js-navigation-menu" class="navigation-menu show">
                    <li class="nav-link"><a href="javascript:void(0)">Home</a></li>
                    <li class="nav-link"><a href="javascript:void(0)">Projects</a></li>
                    <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="hero">
            <div class="hero-inner">
                {{--<a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image"></a>--}}
                <div class="hero-copy">
                    <p>My name is Korey McMurtrey, a Code Louisville graduate, and this is my portfolio.</p>
                </div>
            </div>
        </div>
    </header>

<div class="main-container">


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