<!doctype html>
<html lang="en">
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 May 2020 01:55:46 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Register | Sproutpay</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map

">


    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
             <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-9 col-xl-7">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class=" col -md-6 text-primary p-4">
                                        <h5 class="text-primary"><b>Register</b></h5>
                                        <p>register now to join us.</p>
                                    </div>
                                    <div class="col-md-6">

                                    <img src="{{asset('asset/img/sprout-logo-new.png')}}" width="80%">

                                    </div>
                                </div>
                                
                            </div>
                        
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="" >
                                        <img src=" {{asset('asset/img/circle.png')}}" alt=""
                                             class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                          @if(Session::has('error'))

                            <div class="alert alert-danger">
                                    
                                 {{Session::get('error')}}
                                    
                            </div>

                         @endif

                    @if($errors->any())
                        <div class="alert alert danger">
                            <ul>
                                @foreach($errors->all() as $error)

                                    <div class="alert alert-danger">
                                        
                                         <li>{{ $error }}</li>

                                    </div>

                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <div class="p-2">
                            <form class="form-horizontal" action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name"
                                                   placeholder="First Name" required value="{{ old('first_name') }}" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name"
                                                   placeholder="Last Name" required value="{{ old('last_name') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                            placeholder="email" required value="{{ old('email') }}">
                                        </div>
                                    </div>
                                   <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="number" class="form-control" placeholder="Phone Number" name="phone_number" id="phone_number" required value="{{ old('phone_number') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="id_type">ID Type</label>
                                            <input type="text" class="form-control" name="id_type" id="id_type"
                                               placeholder="ID type" required value="{{ old('id_type') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone_number">ID Number</label>
                                            <input type="number" class="form-control" placeholder="ID Number" name="id_number" id="id_number" required value="{{ old('id_number') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                   placeholder="Password" required value="{{ old('password') }}"  >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="country_of_residence">Country of Residence</label>
                                            <input type="text" class="form-control" name="country_of_residence" id="country_of_residence"
                                                   placeholder="Country of Residence" required value="{{ old('country_of_residence') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="user_type">User Type</label>
                
                                          <select class="form-control" name="user_type">
                                                <option>Select</option>
                                                <option value="individual">Individual</option>
                                                <option value="company">Company</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="ref" value="">

                                <div class="mt-4">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                        Register
                                    </button>
                                </div>

                                {{--<div class="mt-4 text-center">
                                    <p class="mb-0">By registering you agree to the Secured Investment <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>--}}

                            </form>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Already have an account with us? <a href="{{route('login')}}"
                                                                   class="font-weight-medium text-primary"> Login</a>
                            </p>
                            <p>© 2021 <a href="">Sproutpay</a>. All right reserved</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>


        <script src="{{asset('assets/libs/toastr/build/toastr.min.js')}}"></script>
        <script type="text/javascript">
            @if(session('danger'))
            toastr.error('{{session("danger")}}');
            @endif
            @if(count($errors)>0)
            @foreach($errors->all() as $error)
            toastr.error('{{$error}}');
            @endforeach
            @endif
            @if(session('success'))
            toastr.success('{{session("success")}}');
            @endif
        </script>

        @include('sweetalert::alert')

    </body>

    </html>
            

