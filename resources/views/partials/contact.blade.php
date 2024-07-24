<link rel="stylesheet" href="css/home.css">

<style>
    #offcanvasTop {
  --bs-offcanvas-height: 100vh;
  background-color: #c5e1d4;
}

</style>

  <main id="gradientDiv">
    <div class="container py-5 text-white" id="contactUSViaEmail border-black">
      <div class="row g-5">
        <!-- Contact Information Block -->
        <div class="col-xl-6">
          <div class="row row-cols-md-2 g-4 text-black">

            <div class="aos-item" data-aos="fade-up" data-aos-delay="200">
              <div class="aos-item__inner">
                <div class="bg-light hvr-shutter-out-horizontal d-block p-3 rounded">
                  <div class="d-flex justify-content-start">
                    <i class="fa-solid fa-envelope h3 pe-2"></i>
                    <span class="h5">Email</span>
                  </div>
                  <span>admin@satsindo.com</span>
                  <span>h.susanto@satsindo.com</span>
                </div>
              </div>
            </div>

            <div class="aos-item" data-aos="fade-up" data-aos-delay="200">
              <div class="aos-item__inner">
                <div class="bg-light hvr-shutter-out-horizontal d-block p-3 rounded" style="height: 7rem">
                  <div class="d-flex justify-content-start">
                    <i class="fa-solid fa-phone h3 pe-2"></i>
                    <span class="h5">Phone</span>
                  </div>
                  <span>(021) 55698241</span>
                </div>
              </div>
            </div>
          </div>

          <div class="aos-item mt-4 text-black" data-aos="fade-up" data-aos-delay="600">
            <div class="aos-item__inner">
              <div class="bg-light hvr-shutter-out-horizontal d-block p-3 rounded">
                <div class="d-flex justify-content-start">
                  <i class="fa-solid fa-location-pin h3 pe-2"></i>
                  <span class="h5">Office location</span>
                </div>
                <span>Foresta Business Loft 1, Jl. BSD Raya Utama Unit 20, Pagedangan, Tangerang Regency, Banten 15339</span>
              </div>
            </div>
          </div>

          <div class="aos-item text-black" data-aos="fade-up" data-aos-delay="800">
            <div class="mt-4 w-100 aos-item__inner rounded">
                <iframe class="hvr-shadow" width="100%" height="345" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=Foresta%20Business%20Loft%201,%20Jl.%20BSD%20Raya%20Utama%20Unit%2020,%20Pagedangan,%20Tangerang%20Regency,%20Banten%2015339&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
              </div>
          </div>
        </div>

        <!-- Contact Form Block -->
        <div class="col-xl-6">
            <form action="/contact" method="POST">
              @csrf
              <h2 class="pb-4">Leave a message</h2>

              <div class="row g-4">

                <div class="col-6 mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="John">
                </div>

                <div class="col-6 mb-3">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Doe">
                </div>

              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1234567890" required>
              </div>

              <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" name="country" aria-label="Default select example">
                  <option value="1">INDONESIA</option>
                  <option value="2">Non INDONESIA</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
              </div>

              <button type="submit" class="btn btn-primary mt-2">Send Message</button>
            </form>
        </div>
          

      </div>
    </div>
  </main>