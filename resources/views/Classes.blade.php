@extends('Layouts.main')
@section('main-section')


<!DOCTYPE html>
<html lang="en">

<body>
   

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Classes</h1>
                <a href="{{route('home')}}" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="{{route('classes')}}" class="btn btn-light py-md-3 px-md-5">Classes</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Class Timetable Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Class Schedule</h5>
            <h1 class="display-3 text-uppercase mb-0">Working Hours</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Monday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Tuesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Wednesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-4">Thursday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-5">Friday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-6">Saturday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-7">Sunday</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-5">
                        @foreach($schedules as $schedule)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="bg-dark rounded text-center py-5 px-3">
                                    <h6 class="text-uppercase text-light mb-3">{{ $schedule->class_time }}</h6>
                                    <h5 class="text-uppercase text-primary">{{ $schedule->gym_programs }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>
@endsection


{{-- <div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-5">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="bg-dark rounded text-center py-5 px-3">
                    <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                    <h5 class="text-uppercase text-primary">Power Lifting</h5>
                   
                </div>
            </div>
       
        </div>
    </div>

</div> --}}