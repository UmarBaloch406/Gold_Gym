@extends('backend/Layout.main')
@section('main-section')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Schedule</h3>
                </div>
                <!-- /.card-header -->

                <!-- Display Success Message -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('schedule.update', $schedule->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Specify the HTTP method for update -->
                    <div class="card-body">

                        <div class="form-group">
                            <label for="class_time">Class Time</label>
                            <input 
                                type="text" 
                                class="form-control @error('class_time') is-invalid @enderror" 
                                id="class_time" 
                                name="class_time" 
                                value="{{ old('class_time', $schedule->class_time) }}" 
                                placeholder="Enter class time"
                            >
                            @error('class_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gym_programs">Gym Programs</label>
                            <input 
                                type="text" 
                                class="form-control @error('gym_programs') is-invalid @enderror" 
                                id="gym_programs" 
                                name="gym_programs" 
                                value="{{ old('gym_programs', $schedule->gym_programs) }}" 
                                placeholder="Enter gym programs"
                            >
                            @error('gym_programs')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
