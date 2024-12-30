
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
                 <div class="container">
        <h1 class="mt-4">Semesters with Missing Results</h1>
        
       <!-- Check if there are any semesters with missing results -->
@if ($semesters->isEmpty())
    <div class="alert alert-info">
        No semesters with missing results within the next 5 days.
    </div>
@else
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Semester Name</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Days Left</th>
                <th>File Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through the semesters and display each one -->
            @foreach($semesters as $semester)
                <tr>
                    <td>{{ $semester->semester_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($semester->end_date)->format('Y-m-d') }}</td>
                    <td>{{ ucfirst($semester->status) }}</td>
                    <td>
                        {{ $semester->days_left }} {{ $semester->days_left == 1 ? 'day' : 'days' }} left
                    </td>
                    
                    <!-- Display file status (Missing or Submitted) -->
                    <td>
                        <span class="text-{{ $semester->file_status == 'Submitted' ? 'success' : 'warning' }}">
                            {{ $semester->file_status }}
                        </span>
                    </td>
                    <td>
                    <a href="javascript:void(0);" onclick="notifyUser({{ $semester->id }})" class="btn btn-info btn-sm">
                        Notify
                    </a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

    </div>

    <!-- Bootstrap JS (Optional for better UI/UX) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
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




