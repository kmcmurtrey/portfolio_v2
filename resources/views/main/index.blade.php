@extends('app')

@section('content')
    <header class="navigation" role="banner">
        <div class="navigation-wrapper">
            <a href="/"><h4 class="logo">Korey McMurtrey</h4></a>
            <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
            <nav role="navigation">
                <ul id="js-navigation-menu" class="navigation-menu show">
                    <li class="nav-link"><a href="about">About</a></li>
                    <li class="nav-link"><a href="#projects">Projects</a></li>
                    <li class="nav-link"><a href="#contact">Contact</a></li>
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

        <a href="#" name="projects"></a>
        <section class="project">
            <img class="project-img" src="assets/img/php_project.jpg" alt="Screenshot of PHP demo project.">
            <div class="project-content">
                <h2>PHP Project</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="https://github.com/kmcmurtrey/web_dev_resources">
                    {{--<img src="assets/img/Github.png" alt="Github">--}}
                    <i class="fa fa-github fa-2x"></i>
                </a>
                <a href="https://youtu.be/Gwas_D4R8_w">
                    {{--<img src="assets/img/Github.png" alt="Github">--}}
                    <i class="fa fa-youtube fa-2x"></i>
                </a>
                <ul class="tech">
                    <li>PHP</li>
                    <li>MySQL</li>
                </ul>
            </div>
        </section>

        <hr>

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

        <hr>

        <a href="#" name="contact"></a>
        <section class="contact">
            <div class="contact-content">
                <h2>Contact Me</h2>
                <p>If you have any questions or comments, please let me know.</p>
            </div>

            <div class="contact-form">
                {{--Form elements--}}
                {!! Form::open(['url' => 'contact']) !!}

                <div class="form-group-top">
    {{--                {!! Form::label('name', 'Name: ') !!}--}}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}

    {{--                {!! Form::label('email', 'Email: ') !!}--}}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                </div>

                <div class="form-group-message">
    {{--                {!! Form::label('message', 'Message: ') !!}--}}
                    {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message']) !!}
                </div>

                <div class="form-group-btn">
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
            </div>
        </section>
    </div>

@stop

