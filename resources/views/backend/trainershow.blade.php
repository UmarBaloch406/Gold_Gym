@extends('backend/Layout.main')
@section('main-section')

<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white" id="sidebar" style="width: 250px; min-height: 100vh;">
        <h4 class="text-center py-3">Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trainer.select') }}" class="nav-link text-white">Trainers</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Reports</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Settings</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="container mt-5" style="flex: 1;">
        <h3>Trainers List</h3>
        <a href="{{route('trainer')}}" class="btn btn-success mb-3">Add New Trainer</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)
                <tr>
                    <td>{{$trainer->id}}</td>
                    <td>{{ $trainer->name }}</td>
                    <td>
                        <img src="{{ asset('storage/images/' . $trainer->image) }}" alt="{{ $trainer->name }}" width="100" height ="100">
                    </td>                    
                    <td>
                        <a href="{{ route('trainer.edit', $trainer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('trainer.destroy', $trainer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
