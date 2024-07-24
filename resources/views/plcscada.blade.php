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
                    <h1 class="mb-3" id="heroTitle">PLC-HMI-DCS-SCADA</h1>
                    <h4>We provide solution for PLC controls processes, DCS coordinates systems, HMI facilitates interaction, and SCADA monitors industrial processes</h4>
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
                    <div class="text-center container-fluid py-5">
                  
                      <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4"></div>

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card zoom shadow">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://plcynergy.com/wp-content/uploads/2021/01/SCADA-System.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">PLC HMI DCS SCADA</h5>
                                <p>Experience seamless automation with HMI, PLC, DCS, and SCADA. HMI ensures intuitive human-machine interaction. PLC orchestrates processes with precision. DCS integrates control systems seamlessly. SCADA offers centralized monitoring and control for enhanced efficiency.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4"></div>

                      </div>
                    </div>

                </section>

            </div>
        </div>

    </div>
    {{-- List of Product --}}

@endsection
{{-- Container End --}}
