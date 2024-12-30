<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed Semesters</title>
    <!-- Include Bootstrap CSS (optional, if not already included in your project) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h3>Semesters with Missing Results</h3>

        <!-- Check if there are any semesters with missing results -->
        @if(count($failedSemesters) == 0)
            <p>No semesters with missing results found.</p>
        @else
            <!-- Display semesters in a table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Semester No</th>
                        <th>Semester Name</th>
                        <th>Status</th>
                        <th>End Date</th>
                        <th>Result Uploaded</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($failedSemesters as $semester)
                        <!-- Only show rows where the result is not uploaded -->
                        @if(is_null($semester->result))
                            <tr>
                                <td>{{ $semester->semester_no }}</td>
                                <td>{{ $semester->semester_name }}</td>
                                <td>{{ $semester->status }}</td>
                                <td>{{ $semester->end_date }}</td>
                                <td>No</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Include Bootstrap JS and dependencies (optional, if not already included in your project) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
