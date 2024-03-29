<x-guest-layout>
    <div class="position-fixed top-0 end-0 start-0 bg-img-start" style="height: 32rem; background-image: url(assets/svg/components/card-6.svg);">
        <!-- Shape -->
        <div class="shape shape-bottom zi-1">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
            </svg>
        </div>
        <!-- End Shape -->
    </div>
    <div class="container py-5 py-sm-7">
        <a class="d-flex justify-content-center mb-5" href="index.html">
            <img class="zi-2" src="assets/svg/logos/logo.svg" alt="Image Description" style="width: 8rem;">
        </a>

        <div class="mx-auto" style="max-width: 30rem;">
            <!-- Card -->
            <div class="card card-lg mb-5">
                <div class="card-body">
                    <!-- Form -->
                    <form method="POST" action="{{ route('logincustom') }}" class="js-validate needs-validation" novalidate>
                        @csrf
                        <div class="text-center">
                            <div class="mb-5">
                                <h1 class="display-5">Iniciar sesión</h1>
                                <p>Don't have an account yet? <a class="link" href="{{ url('register') }}">Registrar</a></p>
                            </div>

                            <div class="d-grid mb-4">
                                <a class="btn btn-white btn-lg" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                      <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg" alt="Image Description">
                      Sign in with Google
                    </span>
                                </a>
                            </div>

                            <span class="divider-center text-muted mb-4">OR</span>
                        </div>

                        <!-- Form -->
                        <div class="mb-4">
                            <label class="form-label" for="signinSrEmail">Correo electrónico</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required>
                            <span class="invalid-feedback">Please enter a valid email address.</span>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="mb-4">
                            <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    <span>Password</span>
                    <a class="form-label-link mb-0" href="authentication-reset-password-basic.html">Forgot Password?</a>
                  </span>
                            </label>

                            <div class="input-group input-group-merge" data-hs-validation-validate-class>
                                <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": "#changePassTarget",
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": "#changePassIcon"
                         }'>
                                <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                                    <i id="changePassIcon" class="bi-eye"></i>
                                </a>
                            </div>

                            <span class="invalid-feedback">Please enter a valid password.</span>
                        </div>
                        <!-- End Form -->

                        <!-- Form Check -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="termsCheckbox">
                            <label class="form-check-label" for="termsCheckbox">
                                Recuerdame
                            </label>
                        </div>
                        <!-- End Form Check -->

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->

            <!-- Footer -->
            <div class="position-relative text-center zi-1">
                <small class="text-cap text-body mb-4">Trusted by the world's best teams</small>

                <div class="w-85 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col">
                            <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->

                        <div class="col">
                            <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->

                        <div class="col">
                            <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->

                        <div class="col">
                            <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Footer -->
        </div>
    </div>
    <!-- End Content -->
</x-guest-layout>
