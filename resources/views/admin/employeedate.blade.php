
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
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

                 <div class="container mt-4">
    <h2 class="mb-4">Employee Information</h2>
    <table class="table table-bordered" style="font-size:15px">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Birth</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Contact Name</th>
                <th>Contact Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->fname }}</td>
                <td>{{ $employee->mname }}</td>
                <td>{{ $employee->lname }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->number }}</td>
                <td>{{ $employee->datebirth }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->department }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->contactname }}</td>
                <td>{{ $employee->contactphone }}</td>
                <td>
                   <a onclick="return confirm('are you sure to delete')" class="btn btn-danger" href="{{url('deleteemployee',$employee->id)}}">Delete</a>
                   <a class="btn btn-success" href="{{url('updateemployee',$employee->id)}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


            </div>
            

     <!-- Footer Area Here -->

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




