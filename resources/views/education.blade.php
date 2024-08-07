@extends('layouts.main')

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/style.css">

{{-- Container Start --}}
@section('container')

    <!-- Jumbotron -->
    <div class="row mb-3">
        <div class="p-5 text-center bg-image rounded-3" style="background-image: url('img/product/HeroProduct.jpg'); height: 400px;">
            <div class="d-flex justify-content-start align-items-center h-100">
                <div class="text-white text-start" id="fontRusso">
                    <h1 class="mb-3" id="heroTitle">Education Center</h1>
                    <h4 id="heroDesc"> This expert-led course, created to help you reach your career goals, will give you practical skills and individualized attention. Join us right away to reserve your place!</h4>
                    <a data-mdb-ripple-init class="btn btn-primary btn-lg text-white mt-3" href="/#contactUSViaEmail" role="button">Email Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    {{-- List of Product --}}
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-5">
        
        <div class="container">
            <div class="col mb-2">
                <h1 class="mt-5" id="fontRusso">List Of Product & Service</h1>
            </div>
    
            <div class="col d-flex justify-content-center align-items-center"  >

                <section>
                    <div class="text-center container-fluid py-5" >
                  
                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-4 col-md-12 mb-4">
                                <a class="link-unstyled" href="http://satsindoeducenter.com/">
                                    <div class="card zoom shadow" style="height:22rem">
                                        <div class="bg-image ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light">
                                        <img src="img/product/robotic.jpg"
                                            class="w-100" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Robotic & Coding Class (LEGO & ARDUINO)</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <a class="link-unstyled" href="http://satsindoeducenter.com/">
                                    <div class="card zoom shadow"  style="height:22rem">
                                    <div class="bg-image ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light">
                                        <img src="img/product/plc.jpg"
                                        class="w-100" />
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">PLC HMI and SCADA CLASS ( All Brand )</h5>
                                    </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <a class="link-unstyled" href="http://satsindoeducenter.com/">
                                    <div class="card zoom shadow"  style="height:22rem">
                                    <div class="bg-image ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light">
                                        <img src="img/product/maintenance.jpg"
                                        class="w-100" />
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Maintenance System Management CLASS</h5>
                                    </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-4 col-md-12 mb-4">
                                <a class="link-unstyled" href="http://satsindoeducenter.com/">
                                    <div class="card zoom shadow" style="height:22rem">
                                        <div class="bg-image ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light">
                                        <img src="img/product/lean.jpg"
                                            class="w-100" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Lean Management CLASS</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <a class="link-unstyled" href="http://satsindoeducenter.com/">
                                    <div class="card zoom shadow" style="height:22rem">
                                        <div class="bg-image ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light">
                                        <img src="img/product/sdc.jpg"
                                            class="w-100" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">SOFTWARE Development CLASS ( Front End & Back End )<h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                </section>

            </div>
        </div>

    </div>
    {{-- List of Product --}}

@endsection
{{-- Container End --}}
