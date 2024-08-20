@extends('layouts.main')

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>

@section('container')

     {{-- Container Start --}}
     <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="{{ url('/login') }}" method="POST">
                @csrf
                
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-5">
                  <h1><strong>Login</strong></h1>
                </div>
      
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control form-control-lg"
                    placeholder="Enter username" required/>
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
      
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Enter password" />
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
    {{-- Container End --}}

@endsection
