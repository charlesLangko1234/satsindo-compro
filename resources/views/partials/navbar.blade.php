<link rel="stylesheet" href="css/navbar.css">

<style>
  .fade-out {
      opacity: 1;
      transition: opacity 1s ease-out; /* Smooth transition over 1 second */
  }
  .fade-out.hide {
      opacity: 0;
  }
</style>

{{-- START NAVBAR --}}
@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show fade-out" id="success-alert" role="alert">
    <strong>{{ session('success') }}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

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
        
        @if($title === 'Company')
            <div class="d-flex" id="contact">
                <ul class="navbar-nav" id="contact">
                    <li class="nav-item me-3">
                        <a class="btn btn-primary nav-link link-primary text-white px-3" href="/login" style="border-radius: 5px;">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        @endif

      </div>
    </div>
</nav>
{{-- END NAVBAR --}}


<script>
  // Check if the alert exists on the page
  document.addEventListener('DOMContentLoaded', function() {
            var alert = document.getElementById('success-alert');
            if (alert) {
                // Set a timeout to start fading out the alert after 3 seconds (3000 milliseconds)
                setTimeout(function() {
                    alert.classList.add('hide'); // Add hide class to start fade-out
                    setTimeout(function() {
                        alert.remove(); // Remove the alert element after fade-out
                    }, 1000); // Time matches the CSS transition duration
                }, 3000);
            }
        });
</script>