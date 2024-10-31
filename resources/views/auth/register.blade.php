<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Techmin - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- Theme Config Js -->
    <script src="{{asset('backend/assets/js/config.js')}}"></script>

    
    

    <!-- App css -->
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative" style="height: 100vh;">
    <div class="account-pages p-sm-5  position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9 col-lg-11">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4 text-center">
                                        <a href="index.html" class="logo-light">
                                            <img src="{{asset('backend/assets/images/logo.png')}}" alt="logo" height="28">
                                        </a>
                                        <a href="index.html" class="logo-dark">
                                            <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="dark logo" height="60">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto text-center">
                                        {{-- <h4 class="fs-20">Free Sign Up</h4>
                                        <p class="text-muted mb-4">Enter your email address and password to <br> access account.
                                        </p> --}}

                                        <!-- form -->
                                        
                                        <form method="POST" class="text-start" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input class="form-control" name="name" :value="old('name')" type="text" id="fullname" placeholder="Enter your name" required="">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email address</label>
                                                <input class="form-control" name="email" :value="old('email')" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Confirm Password</label>
                                                <input class="form-control" name="password_confirmation" type="password" required="" id="password" placeholder="Enter your password">
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-signup" required>
                                                    <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-muted">Terms and
                                                            Conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit">Sign Up</button>
                                            </div>

                                            <!-- <div class="text-center mt-4">
                                                <p class="text-muted fs-16">Sign in with</p>
                                                <div class="d-flex gap-2 justify-content-center mt-3">
                                                    <a href="javascript: void(0);" class="btn btn-soft-primary"><i class="ri-facebook-circle-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-danger"><i class="ri-google-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-info"><i class="ri-twitter-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-dark"><i class="ri-github-fill"></i></a>
                                                </div>
                                            </div> -->
                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="{{asset('backend/assets/images/auth-img.jpg')}}" alt="" class="img-fluid rounded h-100">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">Don't have an account? <a href="{{ route('login') }}"
                            class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Sign up</b></a>
                    </p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>document.write(new Date().getFullYear())</script> © Broxy Studio - Theme by Salem Bahri
        </span>
    </footer>

    <!-- Vendor js -->
    <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>









    <script src="{{asset('backend/assets/vendor/lucide/umd/lucide.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/assets/js/app.min.js')}}"></script>

</body>

</html>