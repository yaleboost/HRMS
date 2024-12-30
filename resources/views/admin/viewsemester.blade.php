
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
    <h2 class="mb-4">Semester Information</h2>
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
                <th>ID</th>
                <th>Semester name</th>
                <th>semester number</th>
                <th>start date</th>
                <th>end date</th>
                <th>sccholarship id</th>
                <th>status</th>
                <th>result</th> 
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($semester as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->semester_name }}</td>
                <td>{{ $employee->semester_no }}</td>
                <td>{{ $employee->start_date }}</td>
                <td>{{ $employee->end_date }}</td>
                <td>{{ $employee->scholarship_id }}</td>
                <td>{{ $employee->status }}</td>
                <td>{{ $employee->result }}</td>
                <td>
                   <a onclick="return confirm('are you sure to delete')" class="btn btn-danger" href="{{url('deletesemester',$employee->id)}}">Delete</a>
                   <a class="btn btn-success" href="{{url('updatesemester',$employee->id)}}">Edit</a>
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




