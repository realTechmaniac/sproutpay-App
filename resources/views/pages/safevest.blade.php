@extends('layout.userApp')

@section('content')
   
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">safevest</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>
                                        <p class="card-title-desc">Enter your details in the fields below</p>
                                        <form class="needs-validation" method="POST" action="{{url('/storesafevest')}}">

                                            @csrf
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="firstName" value="{{old('firstName')}}" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="lastName"  value="{{old('lastName')}}" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom01">Email Address</label>
                                                        <input type="email" class="form-control" id="validationCustom01" placeholder="Email" name="email"  value="{{old('email')}}" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom02">Phonenumber</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Phone Number" name="phoneNumber" value="{{old('phoneNumber')}}" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom01">Amount(USD)</label>
                                                        <input type="number" class="form-control" id="amount_to_change" placeholder="Amount to Safevest in USD"  name="amount" value="{{old('amount')}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom02">Payment Currency</label>
                                                        <select class="form-control" id="myselect" name="currency" >
                                                          <option value="NGN">NGN</option>
                                                          <option value="KES">KES</option>
                                                          <option value="GHS">GHS</option>
                                                          <option value="EUR">EUR</option>
                                                          <option value="GBP">GBP</option>
                                                          <option value="USD">USD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom02"><strong>Amount Due To Pay</strong></label>
                                                       <h5><strong><span id="total_amount_to_pay"></span></strong>
                                                        </h5>
                                                    </div>
                                                </div>
                                            <div class="text-center mt-5">

                                                  <button class="btn btn-primary" type="submit">Pay Now</button>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>

                <!-- end row -->
            </div>
        </div>
    </div>

    </div>

@endsection