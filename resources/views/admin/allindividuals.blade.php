@extends('layout.userApp')



@section('content')

    
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">All Individuals</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                             
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center"> 
                                            
                                            <h4 class="card-title">All Individuals</h4>

                                        </div>
                                
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone Number</th>
                                                <th>ID Type</th>
                                                <th>ID Number</th>
                                                <th>Email</th>
                                                <th>Country of Residence</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>

                                           <!--  Check if the data is greater than Zero to avoid error -->

                                                @if($individuals->count() > 0)

                                                    @foreach($individuals as $individual)

                                                        <tr>
                                                            <td>{{$individual->first_name}}</td>
                                                            <td>{{$individual->last_name}}</td>
                                                            <td>{{$individual->phone_number}}</td>
                                                            <td>{{$individual->id_type}}</td>
                                                            <td>{{$individual->id_number}}</td>
                                                            <td>{{$individual->email}}</td>
                                                            <td>{{$individual->country_of_residence}}</td>
                                                        </tr>

                                                    @endforeach
                                                
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


               
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

               

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->


@endsection