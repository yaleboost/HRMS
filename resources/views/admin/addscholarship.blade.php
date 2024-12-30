
<!DOCTYPE html>
<html lang="en">

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


            <form action="{{url('/addscholarship')}}" method="POST">
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
                                    <h1 class="h4 text-gray-900 mb-4">Create an Scholarship!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="course_name" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Scholarship name" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="duration" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Duration" required>
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="scholarship_type" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Scholarship type" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="amount" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Amount" required>
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="employee_id" class="form-control" required>
                                        <option value="">Select Employee ID</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->fname }}  {{ $employee->mname }}   {{ $employee->lname }}</option>
                                        @endforeach
                                    </select>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <select name="status" id="" class="form-control" required>
                                            <option value="">Select Scholarship Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Complated">Complated</option>
                                                <option value="terminated">terminated</option>
                                            </select>
                                        </div> 
                                        <div class="col-sm-6">
                                            <input type="date" name="grant_date" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="grant_date" required>
                                                <li>granted date</li>            
                                        
                                    </div>
                                    </div>
                                    <input type="submit" value="Register Scholarship" class="btn btn-primary btn-user btn-block">
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