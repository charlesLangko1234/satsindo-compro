<link rel="stylesheet" href="css/navbar.css">

{{-- START NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="img/logo-satsindo.svg" alt="" width="200" height="40" class="d-inline-block align-text-top">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === 'Product') ? 'active' : '' }}" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product & Solution
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

              <li><a class="dropdown-item" href="/" style="font-weight: bold">Industrial Automation Engineering</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/industrialRobot">Robotic Solution</a></li>
              <li><a class="dropdown-item" href="/costumpurposemachine">Customize Purpose Machinery</a></li>
              <li><a class="dropdown-item" href="/plcscada">PLC, HMI, DCS and SCADA</a></li>
              <li><a class="dropdown-item" href="/smartvision">Smart Vision</a></li>
              <li><br></li>

              <li><a class="dropdown-item" href="/" style="font-weight: bold">Business Management System</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/software">MES & ERP Software Developer</a></li>
              <li><br></li>

              <li><a class="dropdown-item" href="/" style="font-weight: bold">General Procurement Service</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/generalSupplier">General Supplier</a></li>
              <li><a class="dropdown-item" href="/serviceContract">Maintenance Service Contract</a></li>
              <li><br></li>

              <li><a class="dropdown-item" href="/" style="font-weight: bold">Education Center</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/education">Education Center</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Portofolio') ? 'active' : '' }}" href="/portofolio">Portofolio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Company') ? 'active' : '' }}" href="/company">Company</a>
          </li>

        </ul>
        
        {{-- <div class="d-flex" id="contact">
          <ul class="navbar-nav"  id="contact">
              <li class="nav-item me-3">
                  <a class="nav-link link-primary" href="#" style="border: 1px solid black; border-radius: 5px;">
                    Contact Us
                  </a>
              </li>
            </ul>
        </div> --}}
      </div>
    </div>
</nav>
{{-- END NAVBAR --}}