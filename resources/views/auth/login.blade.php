
<!doctype html>
<html lang="en">
<head>

    <title>Sproutpay | Login</title>
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

</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6 text-primary p-4">
                                        <h5 class="text-primary"><b class="text-primary">Login</b></h5>
                                        <p>to continue using Sproutpay</p>
                                    </div>
                                    <div class="col-md-6">
                                         
                                        <img src="{{asset('asset/img/sprout-logo-new.png')}}" width="90%" >

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
                                                <img src="{{asset('asset/img/circle.png')}}" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>
                        </div>
                                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="p-2">
                            <form class="form-horizontal" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="text" class="form-control" name="email" id="username" placeholder="Enter Email" value="{{ old('email') }}"
                                           required autocomplete="email">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="{{ old('password') }}"
                                           required autocomplete="password">
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Login</button>
                                </div>

                                {{--<div class="mt-4 text-center">
                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                </div>--}}
                            </form>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <a href="{{route('register')}}" class="font-weight-medium text-primary"> Sign Up here </a> </p>
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
</body>

</html>
