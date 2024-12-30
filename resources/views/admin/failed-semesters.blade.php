
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

                 
        <h3>Failed Semesters</h3>

       <!-- Check if there are any failed semesters -->
<?php if(count($failedSemesters) == 0): ?>
    <div class="alert alert-info">
        No failed semesters found.
    </div>
<?php else: ?>
    <table class="table table-striped table-hover table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>Semester No</th>
                <th>Semester Name</th>
                <th>Status</th>
                <th>End Date</th>
                <th>Result Uploaded</th>
                <th>Days Since Failure</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($failedSemesters as $semester): ?>
                <?php
                    $endDate = \Carbon\Carbon::parse($semester->end_date); // Parse end date
                    $daysSinceFailure = intval($endDate->diffInDays(now(), false)); // Calculate days difference
                    $notify = $daysSinceFailure >= 5 ? 'Notify Admin' : ''; // Notify condition
                ?>
                <tr>
                    <td><?= $semester->semester_no ?></td>
                    <td><?= $semester->semester_name ?></td>
                    <td>
                        <span class="badge <?= $semester->status == 'active' ? 'bg-success' : 'bg-danger' ?>">
                            <?= ucfirst($semester->status) ?>
                        </span>
                    </td>
                    <td><?= $endDate->format('Y-m-d') ?></td>
                    <td>
                        <span class="badge <?= $semester->result ? 'bg-primary' : 'bg-warning text-dark' ?>">
                            <?= $semester->result ? 'Yes' : 'No' ?>
                        </span>
                    </td>
                    <td>
                        <?= abs($daysSinceFailure) ?> days 
                        <?php if($notify): ?>
                            <span class="text-danger font-weight-bold"><?= $notify ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

                


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




