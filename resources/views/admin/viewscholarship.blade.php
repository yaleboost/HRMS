
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


                 <div class="container mt-4">
    <h2 class="mb-4">Scholarship Information</h2>
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <table class="table table-bordered" style="font-size:15px">
        <thead>
            <tr>
                <th>Scholarship ID</th>
                <th>Employee ID</th>
                <th>Course Name</th>
                <th>Duration</th>
                <th>status</th>
                <th>Scholarship type</th>
                <th>Amount</th>
                <th>Grant Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($scholarship as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->employee_id }}</td>
                <td>{{ $employee->course_name }}</td>
                <td>{{ $employee->duration }}</td>
                <td>{{ $employee->status }}</td>
                <td>{{ $employee->scholarship_type }}</td>
                <td>{{ $employee->amount }}</td>
                <td>{{ $employee->grant_date }}</td>
                <td>
                   <a onclick="return confirm('are you sure to delete')" class="btn btn-danger" href="{{url('deletescholarship',$employee->id)}}">Delete</a>
                   <a class="btn btn-success" href="{{url('updatescholarship',$employee->id)}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


            </div>
            

           @include('admin.fotter');

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




