@extends('layouts.main')

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/style.css">

{{-- Container Start --}}
@section('container')

    <!-- Jumbotron -->
    <div class="row mb-2">
        <div class="p-5 text-center bg-image rounded-3" style="background-image: url('img/product/HeroProduct.jpg'); height: 400px;">
            <div class="d-flex justify-content-start align-items-center h-100">
                <div class="text-white text-start" id="fontRusso">
                    <h1 class="mb-3" id="heroTitle">Smart Vision Solution</h1>
                    <h4 id="heroDesc"> Artificial Intelligent using computer vision to enhances productivity and management capability .</h4>
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
                  
                      <div class="row">

                        <div class="col-lg-4 col-md-12 mb-4"></div>

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card zoom shadow">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://i.pinimg.com/564x/72/25/21/72252107ef0563dec68e0ff1659c0520.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Smart Vision Solution</h5>
                                <p>A smart vision solution utilizes advanced imaging technology and artificial intelligence to analyze visual data for various applications. It can include object detection, recognition, tracking, and analysis in industries such as manufacturing, healthcare, retail, and security. By integrating cameras, sensors, and AI algorithms, smart vision solutions enhance automation, quality control, safety, and decision-making processes with real-time insights and actionable information.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            
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
