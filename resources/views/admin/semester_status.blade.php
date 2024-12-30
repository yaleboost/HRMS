<!-- resources/views/admin/semester-status.blade.php -->


@section('content')
    <div class="container">
        <h3>Semester Status</h3>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
                @foreach ($semesters as $semester)
                    <tr>
                        <td>{{ $semester->semester_no }}</td>
                        <td>{{ $semester->semester_name }}</td>
                        <td>{{ $semester->status }}</td>
                        <td>{{ $semester->end_date }}</td>
                        <td>{{ $semester->result ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($semesters->isEmpty())
            <p>No pending results or issues found.</p>
        @endif
    </div>
@endsection
