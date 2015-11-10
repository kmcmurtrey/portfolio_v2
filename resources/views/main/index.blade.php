@extends('app')

@section('content')
    <header class="navigation" role="banner">
        <div class="navigation-wrapper">
            <a href="#"><h4 class="logo">Korey McMurtrey</h4></a>
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
                <div class="hero-copy">
                    <p>My name is Korey McMurtrey, a Code Louisville graduate, and this is my portfolio.</p>
                </div>
            </div>
        </div>
    </header>

    <div class="main-container">

        <section class="project">
            <img class="project-img" src="assets/img/php_project.jpg" alt="Screenshot of PHP demo project.">
            <div class="project-content">
                <h2>PHP Project</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="tech">
                    <li>PHP</li>
                    <li>MySQL</li>
                </ul>
            </div>
        </section>

        <section class="project">
            <img class="project-img" src="assets/img/lutes_dental.jpg" alt="Screenshot of Lutes Dental Office website.">
            <div class="project-content">
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

    {{--Form elements--}}
    {!! Form::open(['url' => 'contact']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email: ') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('message', 'Message: ') !!}
        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Send', ['class' => 'btn form-control']) !!}
    </div>

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop

