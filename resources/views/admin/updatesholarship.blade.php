
<!DOCTYPE html>
<html lang="en">
<base href="/public"> <!--for inorce cs and js file-->

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


            <form action="{{url('updatescholarshipconfirm',$scholarship->id)}}" method="POST">
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
                                                placeholder="Scholarship name" required value="{{ $scholarship->course_name}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="duration" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Duration" required value="{{ $scholarship->duration}}">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="scholarship_type" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Scholarship type" required value="{{$scholarship->scholarship_type}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="amount" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Amount" required value="{{$scholarship->amount}}">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <select name="employee_id" id="" class="form-control" required value="{{$scholarship->employeee_id}}">
                                                 <option value="1">yalew</option>
                                                <option value="2">chalew</option>
                                                <option value="3">semre</option>
                                                <option value="4">bhailu</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <select name="status" id="" class="form-control" required value="{{$scholarship->status}}">
                                                 <option value="Active">Active</option>
                                                <option value="Complated">Complated</option>
                                                <option value="terminated">terminated</option>
                                            </select>
                                        </div> 
                                        <div class="col-sm-6">
                                            <input type="date" name="grant_date" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="grant_date" required value="{{$scholarship->grant_date}}">
                                                <li>granted date</li>            
                                        
                                    </div>
                                    </div>
                                    <input type="submit" value="Update Scholarship" class="btn btn-primary btn-user btn-block">
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