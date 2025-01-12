
<!DOCTYPE html>
<html lang="en">
<base href="/public">
@include('admin.css')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('admin.sidebar');

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              @include('admin.topbarnav')

                <!-- Begin Page Content -->
                 <!-- /.container-fluid -->
                
                 @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


            <form action="{{url('/updatesemesterconfirm',$semester->id)}}" method="POST" >
            @csrf
            <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Semester!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="semester_name" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Semester name" required value="{{$semester->semester_name}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="semester_no" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Semester Number" required value="{{$semester->semester_no}}">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="date" name="start_date" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Start Date" required value="{{$semester->start_date}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="date" name="end_date" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="End Datedate" required value="{{$semester->end_date}}">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <select name="scholarship_id" id="" class="form-control" required value="{{$semester->scholarship_id}}">
                                            <option value="">Select Scholarship ID</option>
                                                <option value="1">beyene</option>
                                                <option value="2">jemaw</option>
                                                <option value="3">tolera</option>
                                            </select>
                                        </div> 
                                        <div class="col-sm-6">
                                            <input type="file" name="result" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="grant_date" value="{{$semester->result}}">
                                                <li>Semester Result Img,pdf</li>            
                                        
                                    </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <select name="status" id="" class="form-control" required value="{{$semester->status}}">
                                            <option value="">Select Semester Status</option>
                                                <option value="active">active</option>
                                                <option value="complated">complated</option>
                                                <option value="fail">fail</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <input type="submit" value="Update Semester" class="btn btn-primary btn-user btn-block">
                                    <hr>
                                
                                </form>
                                <hr>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            </form>
            </div>
            
 

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
@include('admin.script');

</body>

</html>