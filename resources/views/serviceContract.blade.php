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
                    <h1 class="mb-3" id="heroTitle">Maintenance Service Contract</h1>
                    <h4> Maintenance Service Contract</h4>
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
    
            <div class="col d-flex justify-content-center align-items-center" >

                <section>
                    <div class="text-center container-fluid py-5" >
                  
                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:25rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/4a/a1/0b/4aa10b3bbf39b31a360d19de8bfbf5a1.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Total Preventive Maintenance</h5>
                                </div>
                            </div>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card zoom shadow" style="height:25rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="https://i.pinimg.com/564x/02/fa/80/02fa80cbdb0db25df3976d4eff2474be.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Automatic Management Control Service</h5>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card zoom shadow" style="height:25rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="https://i.pinimg.com/564x/ea/bb/73/eabb734550b274570251f090b9b1b24c.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Spare Part Management and Predictive Maintenance</h5>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card zoom shadow" style="height:25rem">
                                    <div class="bg-image ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                        <img src="https://i.pinimg.com/564x/05/79/c3/0579c3fa9846a22b7322118143e8698f.jpg"
                                        class="w-100" />
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Regular visit for GENBA walk and KAIZEN improvement
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card zoom shadow" style="height:25rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="https://i.pinimg.com/564x/a8/45/10/a84510007668bf1478461a28156d18b0.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Troubleshooting for corrective maintenance </h5>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card zoom shadow" style="height:25rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="https://i.pinimg.com/736x/bc/43/59/bc43596d705ebb8ba5470c87d25180de.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Maintenance manpower headhunter and training services</h5>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

            </div>
        </div>

    </div>
    {{-- List of Product --}}

@endsection
{{-- Container End --}}
