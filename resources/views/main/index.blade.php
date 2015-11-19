@extends('app')

@section('content')
    <header class="navigation" role="banner">
        <div class="navigation-wrapper">
            <a href="/"><h4 class="logo">Korey McMurtrey</h4></a>
            <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
            <nav role="navigation">
                <ul id="js-navigation-menu" class="navigation-menu show">
                    <li class="nav-link"><a href="#about">About</a></li>
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
                <p>For my Code Louisville PHP final project, I coded a demo site in vanilla PHP that connected to a MySQL database. My goal was to demonstrate basic CRUD functionality. The site is a collection of online web development learning resources. The user can create a new resource, can display different resources based on categories, can update existing resources, and can delete them from the database. I also learned how to use Composer and Vagrant boxes, and recorded a video walkthrough of my project.</p>
                <ul class="tech">
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Composer</li>
                    <li>Vagrant</li>
                    <li>Git</li>
                    <li>Bootstrap 3</li>
                </ul>
                <div class="icons">
                    <a class="font-icon fa fa-2x" href="https://github.com/kmcmurtrey/web_dev_resources">
                        <i class="fa fa-github"></i>
                    </a>
                    <a class="font-icon fa fa-2x" href="https://youtu.be/Gwas_D4R8_w">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </div>
        </section>

        <hr>

        <section class="project">
            <img class="project-img" src="assets/img/lutes_dental.jpg" alt="Screenshot of Lutes Dental Office website.">
            <div class="project-content">
                <h2>Lutes Dental Office</h2>
                <p>My first full project is a website for a dental office, completed as Code Louisville's front-end project. It's a one-page layout featuring a slideshow, forms to download, and contact information. In addition to using a little jQuery, I also built the site from the Foundation framework, and learned to use Git for version control.</p>
                <ul class="tech">
                    <li>HTML5 / CSS3</li>
                    <li>jQuery</li>
                    <li>Foundation</li>
                    <li>Git</li>
                </ul>
                <div class="icons">
                    <a class="font-icon fa fa-2x" href="https://github.com/kmcmurtrey/dr_lutes_dental">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </section>

        <hr>

        <a href="#" name="contact"></a>
        <section class="contact">
            <div class="contact-content">
                <h2>Contact Me</h2>
                <p>If you have any questions or comments, please let me know.</p>

                <div class="icons">
                    <a class="font-icon fa fa-2x" href="https://github.com/kmcmurtrey">
                        <i class="fa fa-github"></i>
                    </a>
                    <a class="font-icon fa fa-2x" href="https://www.linkedin.com/in/koreymcmurtrey">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="font-icon fa fa-2x" href="mailto:korey.mcmurtrey@gmail.com">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
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

