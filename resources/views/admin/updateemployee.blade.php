
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


            <form action="{{url('/updateemployeeconirm',$employees->id)}}" method="POST">
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
                                    <h1 class="h4 text-gray-900 mb-4">Update Employee!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="fname" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="First Name" required value="{{ $employees->fname }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="mname" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Middle Name" required value="{{ $employees->mname }}">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="lname" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Last Name" required value="{{ $employees->lname }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Email" required value="{{ $employees->email }}">
                                        </div>                          
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="number" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Phone Number" required value="{{ $employees->number }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="date" name="datebirth" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Amount" required value="{{ $employees->datebirth }}">
                                        </div>                          
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            <select name="gender" id="" class="form-control" required value="{{ $employees->gender }}">
                                                <option value="male">male</option>
                                                <option value="female">female</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="position" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Job Position" required value="{{ $employees->position }}">
                                        </div>                          
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="department" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Departmnet" required value="{{ $employees->department }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="salary" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Salary" required value="{{ $employees->salary }}">
                                        </div>                          
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="contactname" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Contact Name" required value="{{ $employees->contactname }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="contactphone" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Contact phone" required value="{{ $employees->contactphone }}">
                                        </div>                          
                                    </div>
                                    </div>
                                    </div>
                                    <input type="submit" value="Update Employee" class="btn btn-primary btn-user btn-block">
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