@extends('Layouts.main')
@section('main-section')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">MemberShip</h1>
                <a href="{{route('home')}}" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="{{route('membership')}}" class="btn btn-light py-md-3 px-md-5">membership</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid p-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-1.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>6.00AM - 8.00AM</span>
                                    <h6 class="text-light text-uppercase mb-0">Power Lifting</h6>
                                    <span>Umar</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Powerlifting gyms typically provide specialized equipment like squat racks, bench stations, and heavy-duty barbells to support high-weight, low-repetition training.</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-2.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>8.00AM - 10.00AM</span>
                                    <h6 class="text-light text-uppercase mb-0">Body Building</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">**Gym in BodyBuilding**  
                                    A gym is essential in bodybuilding, providing the environment, equipment, and support needed to achieve muscle growth, strength, and overall fitness goals.</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-3.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>10.00AM - 12.00PM</span>
                                    <h6 class="text-light text-uppercase mb-0">Cardio Program</h6>
                                    <span>Asif Sahab</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Regular cardio also helps in maintaining a healthy weight, reduces the risk of chronic diseases (like heart disease and diabetes), and can improve mental health due to the release of endorphins.</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-1.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>12.00PM - 2.00PM</span>
                                    <h6 class="text-light text-uppercase mb-0">Weight Loose</h6>
                                    <span>Ammar</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Muscle Building: Strength training increases muscle mass, which boosts metabolism. A higher metabolic rate helps burn more calories even at rest, supporting long-term weight management.</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-2.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>2.00PM - 4.00PM</span>
                                    <h6 class="text-light text-uppercase mb-0">Fitness Program</h6>
                                    <span>Ahmad</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Fitness Program: Strength training increases muscle mass, which boosts metabolism. A higher metabolic rate helps burn more calories even at rest, supporting long-term weight management.</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-3.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>4.00PM - 6.00PM</span>
                                    <h6 class="text-light text-uppercase mb-0">Yoga Class</h6>
                                    <span>Arham</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Yoga Class: Strength training increases muscle mass, which boosts metabolism. A higher metabolic rate helps burn more calories even at rest, supporting long-term weight management.</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-1.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="{{ asset('frontend/img/blog-2.jpg')}}" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center m-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Categories</h3>
                    <div class="d-flex flex-column justify-content-start bg-dark rounded p-4">
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Design</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Keyword Research</a>
                        <a class="fs-5 fw-bold text-light text-uppercase" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Email Marketing</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Recent Post</h3>
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('frontend/img/blog-1.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('frontend/img/blog-2.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('frontend/img/blog-3.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('frontend/img/blog-1.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('frontend/img/blog-2.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-dark m-1">Design</a>
                        <a href="" class="btn btn-dark m-1">Development</a>
                        <a href="" class="btn btn-dark m-1">Marketing</a>
                        <a href="" class="btn btn-dark m-1">SEO</a>
                        <a href="" class="btn btn-dark m-1">Writing</a>
                        <a href="" class="btn btn-dark m-1">Consulting</a>
                        <a href="" class="btn btn-dark m-1">Design</a>
                        <a href="" class="btn btn-dark m-1">Development</a>
                        <a href="" class="btn btn-dark m-1">Marketing</a>
                        <a href="" class="btn btn-dark m-1">SEO</a>
                        <a href="" class="btn btn-dark m-1">Writing</a>
                        <a href="" class="btn btn-dark m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="text-uppercase mb-4">Plain Text</h3>
                    <div class="bg-dark rounded text-center text-light" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


@endsection