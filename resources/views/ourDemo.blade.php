<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }
    </style>

    <title>{{ $title }}</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand"><strong>Demo Page</strong></a>
          <form action="{{ url('/logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
        </div>
    </nav>
    {{-- Navbar --}}

    <div class="container-fluid">

        {{-- Hero Menu Start --}}
        <div class="row mb-5">
            <div class="p-5 text-center bg-image rounded-3" style="background-image: url('img/HomeHero.jpg'); height: 400px;">
                <div class="d-flex justify-content-start align-items-center h-100">
                    <div class="text-white text-start" id="fontRusso">
                        <h1 class="mb-3 fs-1" id="heroTitle">PT Satya Solusindo Indonesia</h1>
                        <h4 class="mb-3" id="heroDesc">Engineering, Procurement & Construction - Your Industial Automation Solution | Education Center</h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- Hero Menu End --}}

        {{-- Content --}}
        <div class="row m-5">
            <div class="col">

                <div class="card-group">

                    <div class="card m-1">
                      <img src="img/demo/wms.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Warehouse Management System (WMS)</h5>
                        <p class="card-text">Sistem ini membantu mengatur dan mengendalikan berbagai aktivitas di gudang, termasuk penerimaan barang, penyimpanan, pengambilan, dan pengiriman</p>
                        <a href="http://203.175.11.246:8080/" class="btn btn-primary">Akses</a>
                      </div>
                    </div>

                    <div class="card m-1">
                      <img src="img/demo/monitoring_dashboard.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Monitoring Dashboard</h5>
                        <p class="card-text">Sistem ini membantu untuk monitoring data seperti power meter, flow meter, dan menampilkannya dalam bentuk grafik.</p>
                        <a href="http://203.175.11.246:8084/monitoring_dashboard/public/Home" class="btn btn-primary">Akses</a>
                      </div>
                    </div>

                </div>

            </div>
        </div>
        {{-- Content --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
