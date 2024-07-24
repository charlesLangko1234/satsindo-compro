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
                    <h1 class="mb-3" id="heroTitle">General Supplier</h1>
                    <h4> A general supplier for electrical equipment provides a wide range of products necessary for electrical installations and systems. This includes cables, wires, switches, outlets, lighting fixtures, circuit breakers, transformers, and more.</h4>
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
                          <div class="card zoom shadow" style="height:24rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://tsd.one/pictures/21.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Electrical Construction</h5>
                                <p>Electrical material supply ( Cable, Cable Tray, Panel and Accessories ), engineering
                                    design and installation</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow" style="height:24rem">
                              <div class="bg-image ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://engineeringdiscoveries.com/wp-content/uploads/2019/04/Untitled-1jjj.jpg"
                                  class="w-100" />
                              </div>
                              <div class="card-body">
                                  <h5 class="card-title mb-3">Mechanical Construction</h5>
                                  <p>Mechanical material supply, engineering design and installation.</p>
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
