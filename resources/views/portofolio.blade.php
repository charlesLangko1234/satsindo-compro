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
                    <h1 class="mb-3" id="heroTitle">Our Portofolio</h1>
                    <h4 class="mb-3" id="heroDesc">Your Industrial Automation Solution</h4>
                    <a data-mdb-ripple-init class="btn btn-primary btn-lg text-white mt-3" href="#contactUSViaEmail" role="button">Email Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    {{-- Protofolio --}}
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-5">
        
        <div class="container">
            <div class="col mb-2">
                <h1 class="mt-5" id="fontRusso">List Of Product & Service</h1>
            </div>
    
            <div class="col d-flex justify-content-center align-items-center" >

                <section>
                    <div class="text-center container-fluid py-5" >
                  
                      <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card shadow zoom" style="height:24rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="img/about/pallet.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Palletizing Robot</h5>
                                <ul class="text-start">
                                    <li>Cartoon Box Palletizing</li>
                                    <li>Pallet Dispenser</li>
                                </ul>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card shadow zoom" style="height:24rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="img/about/scara.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Scara Robot</h5>
                                <ul class="text-start">
                                    <li>Case Packing</li>
                                    <li>Line Tracking & Object Detection</li>
                                </ul>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/about/siemens.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Siemens System</h5>
                                  <ul class="text-start">
                                      <li>PLC & SCADA Project, PCV Control Process</li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                  
                      </div>
                  
                      <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="img/about/schneider.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Schneider System</h5>
                                    <ul class="text-start">
                                        <li>PLC & SCADA Project, Oil Refining Control Process (Schneider PLC System)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/about/omron.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Omron System</h5>
                                  <ul class="text-start">
                                    <li>PLC & Retrofitting Project Tea Bag Machine Process (Omron PLC System)</li>
                                    <li>Auto conveyor tea box transfer system</li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/about/omron2.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Omron System</h5>
                                  <ul class="text-start">
                                    <li>PLC & SCADA Project Increase Coil insect repellent machine ( Omron PLC System )</li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="img/about/mitsubishi.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Mitsubishi System</h5>
                                    <ul class="text-start">
                                        <li>Acrylic Sheet Process Machine (Mitsubishi PLC System)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="img/about/ab.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Allan-Bradley System</h5>
                                    <ul class="text-start">
                                        <li>Plastic Wrapping machine process (AB PLC System)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/about/dozing.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Dozing Machine</h5>
                                  <ul class="text-start">
                                    <li>Auto Dozing Machine – Cigarette Recipe (Powder)</li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="img/about/filling.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Filling Machine</h5>
                                    <ul class="text-start">
                                        <li>Auto Filling Machine Parfume Factory</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:24rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="img/about/2.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Maintenance Project</h5>
                                </div>
                            </div>
                        </div>
                      </div>

                    </div>

                </section>

            </div>
        </div>

    </div>
    {{-- Portofolio --}}

    <div class="row d-flex mb-5" id="contactUSViaEmail">
        @include('partials.contact')
    </div>

@endsection
{{-- Container End --}}
