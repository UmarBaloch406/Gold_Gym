 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-secondary px-5 mt-5">
    <div class="row gx-5">
        <div class="col-lg-8 col-md-6">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">Contact Us</h4>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0">i-9/1 near warsak road, Islamabad, Pakistan</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-envelope-open text-primary me-2"></i>
                        <p class="mb-0">mumar30406@gmail.com</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone text-primary me-2"></i>
                        <p class="mb-0">03448030406</p>
                    </div>
                    <div class="d-flex mt-4">
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-secondary mb-2" href="{{route('classes')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                        <a class="text-secondary mb-2" href="{{route('trainers')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                        <a class="text-secondary mb-2" href="{{route('membership')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Membership</a>
                        <a class="text-secondary" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-secondary mb-2" href="{{route('classes')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                        <a class="text-secondary mb-2" href="{{route('trainers')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                        <a class="text-secondary mb-2" href="{{route('membership')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Membership</a>
                        <a class="text-secondary" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
    <div class="row gx-5">
        <div class="col-lg-8">
            <div class="py-lg-4 text-center">
                <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Gold Gym</a>. All Rights Reserved.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="py-lg-4 text-center credit">
                <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
    
       <!-- JavaScript Libraries -->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
       <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
       <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
       <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
       <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
   
       <!-- Template Javascript -->
       <script src="{{asset('frontend/js/main.js')}}"></script>
</div>

<!-- Footer End -->