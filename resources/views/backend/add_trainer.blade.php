@extends('backend/Layout.main')
@section('main-section')

<div class="container mt-5"> <!-- Added Bootstrap container for proper alignment -->
    <div class="row justify-content-center"> <!-- Center the form -->
        <div class="col-md-8"> <!-- Control the width of the form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Trainers</h3>
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

                <form action="{{ route('trainer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF protection token -->
                    <div class="card-body">
                        <!-- Trainer Name -->
                        <div class="form-group">
                            <label for="name">Trainer Name</label>
                            <input 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}" 
                                placeholder="Enter trainer name"
                            >
                            @error('trainer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Add Image -->
                        <div class="form-group">
                            <label for="image">Add Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input 
                                        type="file" 
                                        class="custom-file-input @error('image') is-invalid @enderror" 
                                        id="image" 
                                        name="image"
                                    >
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            @error('image')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
