@extends('layouts.main')

<link rel="stylesheet" href="css/home.css">
<script src="js/home.js"></script>

{{-- Container Start --}}
@section('container')

    <!-- Jumbotron -->
    <div class="row mb-5">
        <div class="p-5 text-center bg-image rounded-3" style="background-image: url('img/HomeHero.jpg'); height: 400px;">
            <div class="d-flex justify-content-start align-items-center h-100">
                <div class="text-white text-start" id="fontRusso">
                    <h1 class="mb-3" id="heroTitle">PT Satya Solusindo Indonesia</h1>
                    <h4 class="mb-3" id="heroDesc">Engineering, Procurement & Construction - Your Industial Automation Solution | Education Center</h4>
                    <a data-mdb-ripple-init class="btn btn-primary btn-lg text-white mt-3" href="#contactUSViaEmail" role="button">Email Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    {{-- Overview Product --}}
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-5">

        <div class="col mb-5">
            <h1 class="mt-5" id="fontRusso">Our Product & Solution</h1>
            {{-- <h5>List Of Our Product & Solution</h5> --}}
        </div>

        <div class="col d-flex justify-content-center align-items-center" id="ourProductOverview">

            <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
                <a class="link-unstyled" href="/industrialRobot">
                  <div class="card-body">
                      <h5 class="card-title mb-3" id="fontRusso">Robotic Solution</h5>
                      <img src="img/iconHome/robotic.png" class="card-img-top w-50 mb-3" alt="...">
                      <p class="card-text">Collaborative robot, Industrial Arm Robot, Delta Robot, Scara Robot.</p>
                  </div>
                </a>
            </div>

            <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
              <a class="link-unstyled" href="/plcscada">
                <div class="card-body">
                    <h5 class="card-title mb-3" id="fontRusso">PLC, HMI, DCS and SCADA AUTOMATION SOLUTION</h5>
                    <img src="img/PLC.png" class="card-img-top w-50 mb-3" alt="...">
                    <p class="card-text">Replacing or updating existing PLC systems with newer.</p>
                </div>
              </a>
            </div>

            <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
              <a class="link-unstyled" href="/costumpurposemachine">
                <div class="card-body">
                    <h5 class="card-title mb-3" id="fontRusso">Customize Purpose Machinery</h5>
                    <img src="img/CostumizeMachine.png" class="card-img-top w-50 mb-3" alt="...">
                    <p class="card-text">We provide customize special purpose machine to automate your manufacturing.</p>
                </div>
              </a>
            </div>

        </div>
        
        <div class="col d-flex justify-content-center align-items-center" id="ourProductOverview">

            <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
                <a class="link-unstyled" href="/software">
                  <div class="card-body">
                      <h5 class="card-title mb-3" id="fontRusso">MES & ERP Software Developer</h5>
                      <img src="img/MES.png" class="card-img-top w-50 mb-3" alt="...">
                      <p class="card-text">ERP system, MES (Manufacturing Execution System), MonitoringDashboard.</p>
                  </div>
                </a>
            </div>

            <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
              <a class="link-unstyled" href="/smartvision">
                <div class="card-body">
                    <h5 class="card-title mb-3" id="fontRusso">Smart Vision Solution</h5>
                    <img src="img/troubleShoot.png" class="card-img-top w-50 mb-3" alt="...">
                    <p class="card-text">Artificial Intelligent using computer vision to enhances productivity and capability.</p>
                </div>
              </a>
            </div>

            <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
              <a class="link-unstyled" href="/generalSupplier">
                <div class="card-body">
                    <h5 class="card-title mb-3" id="fontRusso">General Supplier</h5>
                    <img src="img/GeneralSupplier.png" class="card-img-top w-50 mb-3" alt="...">
                    <p class="card-text">Electrical material supply ( Cable, Cable Tray, Panel and Accessories ).</p>
                </div>
              </a>
            </div>

        </div>

        <div class="col d-flex justify-content-center align-items-center" id="ourProductOverview">

          <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
            <a class="link-unstyled" href="/serviceContract">
              <div class="card-body">
                  <h5 class="card-title mb-3" id="fontRusso">Maintenance Service Contract</h5>
                  <img src="img/maintenanceServiceContract.png" class="card-img-top w-50 mb-3" alt="...">
                  <p class="card-text">A maintenance service contract is a formal agreement between a service provider and a client.</p>
              </div>
            </a>
          </div>

          <div class="card me-3 shadow p-3 mb-5 bg-body rounded zoom" style="width: 18rem; height:21rem">
            <a class="link-unstyled" href="/education">
              <div class="card-body">
                  <h5 class="card-title mb-3" id="fontRusso">Education Center</h5>
                  <img src="img/PLC.png" class="card-img-top w-50 mb-3" alt="...">
                  <p class="card-text">Hub for learning, knowledge dissemination, and skill development.</p>
              </div>
            </a>
          </div>
            
        </div>

    </div>
    {{-- Overview Product --}}

    {{-- Our Partner --}}
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-5">
        
        <div class="col mb-5">
            <h1 class="mt-5" id="fontRusso">Our Partners</h1>
            {{-- <h5>List Of Our Partners</h5> --}}
        </div>
        <section id="OurPartners" class="section-bg">

            <div class="container">
      
              <div class="row d-flex justify-content-center" style="visibility: visible; animation-name: fadeInUp;">
      
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/Fanuc.jpeg"class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/aveva.png"class="img-fluid" alt="">
                  </div>
                </div>
              
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/icpdas.png" class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/teltonika.png" class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/wintec.jpeg" class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/fatek.png"class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/idec.png"class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/invt.jpeg" class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/weintek.jpeg" class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="col-3 m-auto">
                  <div class="client-logo">
                    <img src="img/logo/pep.png" class="img-fluid" alt="">
                  </div>
                </div>
                        
              </div>
      
            </div>
      
          </section>

    </div>
    {{-- Our Partner --}}


    <div class="row d-flex mb-5">
      @include('partials.contact')
    </div>

@endsection
{{-- Container End --}}