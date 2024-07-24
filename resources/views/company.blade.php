@extends('layouts.main')

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/company.css">
<link rel="stylesheet" href="css/style.css">

{{-- Container Start --}}
@section('container')

    <!-- Jumbotron -->
    <div class="row mb-3">
        <div class="p-5 text-center bg-image rounded-3" style="background-image: url('img/about/heroAbout.jpg'); height: 400px;">
            <div class="d-flex justify-content-start align-items-center h-100">
                <div class="text-white text-start" id="fontRusso">
                    <h1 class="mb-3" id="heroTitle">SATSINDO</h1>
                    <h4 class="mb-3" id="heroDesc">PT. Satya Solusindo Indonesia</h4>
                    <a data-mdb-ripple-init class="btn btn-primary btn-lg text-white mt-3" href="#contactUSViaEmail" role="button">Email Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    {{-- About Us --}}
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-5">
        
        <div class="container">
            <div class="col mb-5">
                <h1 class="mt-5" id="fontRusso">About Us</h1>
            </div>
    
            <div class="col p-5" id="gradientDiv">
                <div class="container d-flex justify-content-center">
                    <div class="col">
                        <img id="imgAbout" src="img/about/imgAbout.jpg" alt="">
                    </div>
                    
                    <div class="col text-white p-2 allText text-start">
                        SATSINDO focus on Engineering Services and Education Center business strategic to support escalation in technology global development​. <br><br>SATSINDO is specializes in design to develop more intelligent ways to modernization and solving automation system, software, project management, and management support needs for Indonesia business, government facilities, oil & gas process, retail and industrial complexes. Our clients range from building owners to global company.<br><br>SATSINDO is not a dealer for any specific manufacturer, we choose among many manufacturer's products to find the right solution for all of our customers.  We're consultants, engineers, and designers. We look at your entire facility.<br><br>SATSINDO employed the most highly qualified and trained staff in the industry. All our technicians and sales staff have a highest standard of engineering and are up-to-date with the latest technology.

                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- About Us --}}

    {{-- Our Vision --}}
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-5">
        
        <div class="container">
            <div class="col mb-5">
                <h1 class="mt-5" id="fontRusso">Our Vision</h1>
            </div>
    
            <div class="col p-5 text-white" id="gradientDiv">
                <h1>Being Excellent and Trusted Engineering Company and Education Center Community</h1>
            </div>
        </div>

    </div>
    {{-- Our Vision --}}

    {{-- Our Mission --}}
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-5">
        
        <div class="container">
            <div class="col mb-5">
                <h1 class="mt-5" id="fontRusso">Our Mission</h1>
            </div>
    
            <div class="col d-flex justify-content-center align-items-center" id="ourProductOverview">

                <div class="card me-3 shadow-lg p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height: 17rem;">
                    <div class="card-body">
                        <img src="img/about/factory.png" class="card-img-top w-50 mb-3" alt="...">
                        <p class="card-text">Industrial Automation Solution Trendsetter</p>
                    </div>
                </div>

                <div class="card me-3 shadow-lg p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height: 17rem;">
                    <div class="card-body">
                        <img src="img/about/data-transfer.png" class="card-img-top w-50 mb-3" alt="...">
                        <p class="card-text">Maintenance System Escalation</p>
                    </div>
                </div>

                <div class="card me-3 shadow-lg p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height: 17rem;">
                    <div class="card-body">
                        <img src="img/about/puzzle.png" class="card-img-top w-50 mb-3" alt="...">
                        <p class="card-text">Education Center Community</p>
                    </div>
                </div>

                <div class="card me-3 shadow-lg p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height: 17rem;">
                    <div class="card-body">
                        <img src="img/about/virtual.png" class="card-img-top w-50 mb-3" alt="...">
                        <p class="card-text">Digitalization and Personalization Industrial 4.0/5.0</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    {{-- Our Mission --}}

    <div class="row d-flex mb-5">
        @include('partials.contact')
    </div>

@endsection
{{-- Container End --}}
