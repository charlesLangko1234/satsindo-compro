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
                    <h1 class="mb-3" id="heroTitle">MES & ERP Software Developement</h1>
                    <h4 id="heroDesc"> Software development can range from creating simple applications to complex systems for various purposes such as business management, entertainment, education, or scientific research.</h4>
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

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card zoom shadow" style="height:33rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://i.pinimg.com/564x/83/7b/c4/837bc41a63410a8f852dbba37cc510a6.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Enterprise Resource Planning (ERP)</h5>
                                <p>Enterprise resource planning is the integrated management of main business
                                    processes, often in real time and mediated by software and technology..</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card zoom shadow" style="height:33rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://i.pinimg.com/564x/56/6f/cc/566fcc6365a855dfdbf7b6413f5c9f57.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Manufacturing Execution System (ERP)</h5>
                                <p>Manufacturing execution systems are computerized systems used in manufacturing to
                                    track and document the transformation of raw materials to finished goods.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card zoom shadow" style="height:33rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/6a/3a/5b/6a3a5b17d3de6ca03445317fb8be2228.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Automatic Production Planning System (APPS)</h5>
                                  <p>Automated production planning is a future-proof platform that employs advanced
                                    technology and provides the planning speed necessary to react immediately to a very
                                    volatile future</p>
                              </div>
                          </div>
                        </div>
                  
                      </div>
                  
                      <div class="row">
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:33rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/3e/14/01/3e1401568afef9245bc30fdc77041585.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Warehouse Management System (WMS)</h5>
                                  <p>A warehouse management system (WMS) consists of software and processes that allow
                                    organizations to control and administer warehouse operations from the time goods or
                                    materials enter a warehouse until they move out</p>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:33rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/e4/06/61/e406619e966adebf1358abe5cb4559e8.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Transportation Management System (TMS)</h5>
                                  <p>A transportation management system (TMS) is a logistics platform that uses technology
                                    to help businesses plan, execute, and optimize the physical movement of goods, both
                                    incoming and outgoing, and making sure the shipment is compliant, proper
                                    documentation is available.</p>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:33rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/736x/37/de/25/37de25fc15fae7c58c8c7305b4e30339.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Asset Management System (AMS)</h5>
                                  <p>An asset management system is a process used by companies and organizations to
                                    monitor and manage their assets. It consists of tools, techniques, and software that
                                    assist in achieving asset management policies and objectives.</p>
                              </div>
                            </div>
                        </div>

                      </div>

                      <div class="row">
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:33rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/ad/06/86/ad068611586ba76aaef6d1624c647829.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Real Time Location System (RLTS)</h5>
                                  <p>also known as real-time tracking systems, are used to automatically identify and track the location of objects or people in real time, usually within a building or other contained area. Wireless RTLS tags are attached to objects or worn by people, and in most RTLS, fixed reference points receive wireless signals from tags to determine their location</p>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:33rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/dc/44/57/dc4457ac8df6223d4ea4b671c3dcd99b.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Energy Management System (EMS)</h5>
                                  <p>An energy management system is a system of computer-aided tools used by operators
                                    of electric utility grids to monitor, control, and optimize the performance of the
                                    generation or transmission system.</p>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:33rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/7a/b2/93/7ab2933f8b72801e5d25d0bc1600507b.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Human Resource Information System (HRIS)</h5>
                                  <p>A human resources management system or Human Resources Information System or Human
                                    Capital Management is a form of Human Resources software that combines a number of
                                    systems and processes to ensure the easy management of human resources, business
                                    processes and data.</p>
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
