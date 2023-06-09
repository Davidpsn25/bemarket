@vite(['resources/sass/app.scss',    'resources/js/app.js'])
<form method="POST" action="{{ route('register') }}">
    @csrf
    
<section class="vh-100" style="background-color: #1417ea;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px; ">
            <div class="card-body p-md-5">
              <div class="row justify-content-center ">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
  
                  <form class="mx-1 mx-md-4">
                         
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">

                        <div class="mb-3">
                          <label for="basic-url" class="form-label"></label>
                          <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">https://bemarketforex.com/affiliate/</span>

                            <input id="indicado" name="indicado" type="text" class="form-control"  aria-describedby="basic-addon3 basic-addon4">

                          </div>
                          <div class="mt-2" id="basic-addon4">Affiliate CODE</div>
                        </div>
                        
                        <!--<input type="text" id="form3Example1c" class="form-control" />-->
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        
                            <x-input-label for="name" :value="__('Name')" />
                        
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <!--<input type="email" id="form3Example3c" class="form-control" />-->
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <x-input-label for="email" :value="__('Email')" />
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        
                        <x-input-label for="password" :value="__('Password')" />
                        
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        
                        <x-text-input id="password_confirmation" class="form-control"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                      </div>
                    </div>
  
                    <!--<div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>-->
                    <div class="form-check d-flex justify-content-center mb-5">
                        <a class="form-check-label" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
  
                    <!--<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="button" class="btn btn-primary btn-lg">Register</button>
                    </div>-->
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <x-primary-button class="btn btn-primary btn-lg">
                        {{ __('Register') }}
                    </x-primary-button>
                    </div>



                  </form>
  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
       

    