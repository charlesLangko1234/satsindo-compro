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
                    <h1 class="mb-3" id="heroTitle">Customize Purpose Machine</h1>
                    <h4 id="heroDesc">Automated custom machine base on manufacture product design</h4>
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
                  
                      <div class="row d-flex justify-content-center">

                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card zoom shadow" style="height:31rem">
                            <div class="bg-image ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="img/product/fillingMachine.jpg"
                                class="w-100" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">Automatic Filling Machine</h5>
                                <p>An automatic filling machine efficiently fills containers with liquids or powders without human intervention. It accurately dispenses precise quantities, streamlining production processes in various industries such as food, beverage, pharmaceuticals, and chemicals. These machines enhance productivity, ensure consistency, and minimize wastage.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card zoom shadow"  style="height:31rem">
                                <div class="bg-image ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="img/product/melting.jpg"
                                    class="w-100" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Melting Casting Area</h5>
                                    <p>The melting casting area is a specialized zone within manufacturing facilities where metals are melted and cast into specific shapes or molds. It typically houses furnaces or induction heaters to melt the metal, along with equipment for pouring molten metal into molds. This area is critical in metalworking processes, enabling the creation of various components and products with precise specifications.</p>
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
