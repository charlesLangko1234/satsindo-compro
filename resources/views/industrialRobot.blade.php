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
                    <h1 class="mb-3" id="heroTitle">Robotic Solution</h1>
                    <h4>We provide solution for industrial automation with robotic system to achieve the highest OEE, highest production volume and lowest waste. With these solution we can get the consistency 
                      on your production process.</h4>
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
                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card shadow zoom" style="height:34rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://tse2.mm.bing.net/th?id=OIP.0Ix-7SC_hAeqbQKXvgKXMQHaEH&pid=Api&P=0&h=180"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Collaborative Robot</h5>
                                <p>With FANUC collaborative robots, that world has already come into existence. By integrating them into existing production environments, robots directly collaborate with humans, becoming a crucial part of the team. Alongside humans, they take over tedious, repetitive tasks, lifting up to 50 kg, thus maintaining the human’s health while automating entire assembly lines. Meet below our CR and the new CRX series.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card shadow zoom" style="height:34rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://i.ytimg.com/vi/GcqtMTlzfU4/maxresdefault.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Delta Robot</h5>
                                <p>Discover the unique, ultra-compact FANUC M-1iA Series Robot and enter a new dimension in high-speed small parts handling. With 3, 4 or 6 axes, this series of high-speed delta robots is ideal for a variety of applications requiring a maximum payload of 1 kg and a work envelope of up to 420 mm. Through their ability to be mounted in multiple positions, FANUC M-1iA's can be installed directly into the most compact of machines.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom" style="height:34rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://tse4.mm.bing.net/th?id=OIP.-6i0a1qvFlGkAQtNOa76tAHaE8&pid=Api&P=0&h=180"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Industrial Arm Robot</h5>
                                  <p>With more than 100 models, FANUC offers the widest range of industrial robots in the world. Covering a diverse range of applications and industries, FANUC robots are easy to operate and provide complete flexibility thanks to a range of application-specific options, straightforward integration, payloads up to 2.3 t and maximum reaches up to 4.7 m.</p>
                              </div>
                            </div>
                          </div>
                  
                      </div>
                  
                      <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4"></div>
                  
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card shadow zoom">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://tse4.mm.bing.net/th?id=OIP.Q-pthUb1g7n-27_tgGNbkgAAAA&pid=Api&P=0&h=180"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Scara Robot</h5>
                                  <p>FANUC’s SCARA robots are ideal for high-speed, precision applications such as assembly, pick and place, testing/inspection and packaging processes.</p>
                              </div>
                            </div>
                        </div>
                  
                        <div class="col-lg-4 col-md-6 mb-4"></div>
                      </div>
                    </div>

                </section>

            </div>
        </div>

    </div>
    {{-- List of Product --}}

@endsection
{{-- Container End --}}
