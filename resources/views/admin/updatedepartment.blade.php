
<!DOCTYPE html>
<html lang="en">
<base href="/public">
@include('admin.css');

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


<form action="{{url('/updatedepartmentconfirm',$department->id)}}" method="POST">
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
                                                <h1 class="h4 text-gray-900 mb-4">Update a Department</h1>
                                            </div>
                                            <form class="user" method="POST">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" name="department_name" class="form-control form-control-user" placeholder="Department Name" required value="{{$department->department_name}}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="department_head" class="form-control form-control-user" placeholder="Department Head" required value="{{$department->department_head}}">
                                                    </div>                                      
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" name="location" class="form-control form-control-user" placeholder="Location" required value="{{$department->location}}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="contact_number" class="form-control form-control-user" placeholder="Contact Number" required value="{{$department->contact_number}}">
                                                    </div>                                      
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <textarea name="description" class="form-control form-control-user" placeholder="Description" required value="{{$department->description}}"></textarea>
                                                    </div>
                                                </div>

                                                <input type="submit" value="Register Department" class="btn btn-primary btn-user btn-block">
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