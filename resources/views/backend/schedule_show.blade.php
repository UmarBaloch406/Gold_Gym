@extends('backend/Layout.main')
@section('main-section')

<div class="container-fluid mt-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-9 offset-md-3"> <!-- 'offset-md-3' aligns the content leaving space for the sidebar -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Schedules</h3>
                    <a href="{{ route('schedule.show') }}" class="btn btn-primary btn-sm">Add New Schedule</a>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Class Time</th>
                                <th>Gym Programs</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($schedules->count() > 0)
                                @foreach ($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->id }}</td>
                                        <td>{{ $schedule->class_time }}</td>
                                        <td>{{ $schedule->gym_programs }}</td>
                                        <td>
                                            <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center">No schedules found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- End Main Content -->
    </div>
</div>

@endsection
