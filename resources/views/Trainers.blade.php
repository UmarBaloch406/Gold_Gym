@extends('Layouts.main')
@section('main-section')

<!DOCTYPE html>
<html lang="en">

<body>
  
    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Trainers</h1>
                <a href="{{route('home')}}" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="{{route('trainers')}}" class="btn btn-light py-md-3 px-md-5">Trainers</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    
    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">The Team</h5>
            <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    @foreach ($trainers as $trainer)
        <tr>
                
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('storage/images/' .$trainer->image)}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light"> {{$trainer->name}}</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                        
                    </div>
        </tr>
                @endforeach
                </div>
            </div>
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>



</body>

</html> 
@endsection