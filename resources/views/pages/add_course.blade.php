<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ URL::asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap') }}"
        rel="stylesheet">
    <link rel="stylesheet"
        href="{{ url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0') }}" />

    <!-- Icon Font Stylesheet -->
    <link
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ URL::asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body style="background-color: rgba(0, 0, 0, 0.664);">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    {{-- <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0"> 
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('/courses') }}" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                        <a href="{{ url('/404') }}" class="dropdown-item ">404 Page</a>
                        <a href="{{ url('/add-course') }}" class="dropdown-item active">Add Course</a>
                    </div>
                </div>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ url('/register') }}"
                class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav> --}}
    <!-- Navbar End -->


    <!-- Header Start -->
    {{-- <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Popular Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">
                                Popular Courses
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Header End -->

    <div class="alert alert-dark m-1 fadeInUp" hidden role="alert" id="massage"  style="position: fixed; z-index: 10;">
        Success.......!!
    </div>

    <!-- Content Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="display-1 text-center">MANAGE COURSES</h1>
                    <h1 class="mb-4 text-center">Add, Modify or Delete courses from below</h1>
                    <p class="mb-4 text-center">Courses will be displayed in order, they are added
                    </p>
                </div>
            </div>

            {{-- ADD and EDIT BUTTON GROUP START --}}
            <div class="row justify-content-center">

                {{-- ADD Button Start --}}
                <div class="col-lg-2 text-center">
                    <div class="d-grid gap-2">
                        <button type="button" name="" id="add_button"
                            class="btn btn-info rounded-pill py-3 px-5 text-center">ADD
                            COURSES</button>
                    </div>
                </div>
                {{-- ADD Button End --}}

                {{-- EDIT Button Start --}}
                <div class="col-lg-2 text-center">
                    <div class="d-grid gap-2">
                        <button type="button" name="" id="edit_button"
                            class="btn btn-info rounded-pill py-3 px-5 text-center">EDIT
                            COURSES</button>
                    </div>
                </div>
                {{-- EDIT Button End --}}
            </div>
            {{-- ADD and EDIT BUTTON GROUP END --}}

            {{-- ADD COURSE FORMS START --}}

            <div class="row mb-4" id="add_course_div" hidden>
                <div>
                    <div class="col-lg-12 text-center">

                        {{-- FORM template div Start --}}
                        <div id="form_to_be_clone_div" hidden>
                            <form method="post" class="form_to_be_clone" id="template_form">

                                {{-- Fields Start --}}
                                <div class="row m-4">

                                    {{-- Form Column 1 Start --}}
                                    <div class="col m-1">
                                        <div class="mb-3 form-floating">

                                            <input type="text" class="form-control"
                                                name="course_title" id=""
                                                placeholder="Course Title">
                                            <label for="course_title" class="">Course
                                                Title</label>
                                        </div>

                                        <div class="mb-3 form-floating">
                                            <input type="text" class="form-control"
                                                name="course_price" id=""
                                                placeholder="Price">
                                            <label for="course_price" class="">Price</label>
                                        </div>

                                        <div class="mb-3 form-floating">
                                            <input type="text" class="form-control"
                                                name="course_total_students" id=""
                                                placeholder="Registered Students">
                                            <label for="course_total_students"
                                                class="">Registered
                                                Students</label>
                                        </div>
                                    </div>
                                    {{-- Form Column 1 End --}}

                                    {{-- Form Column 2 Start --}}
                                    <div class="col m-1">
                                        <div class="mb-3 form-floating">

                                            <input type="text" class="form-control"
                                                name="course_instructor" id=""
                                                placeholder="Instructor">
                                            <label for="course_instructor"
                                                class="">Instructor</label>
                                        </div>
                                        <div class="mb-3 form-floating">
                                            <input type="text" class="form-control"
                                                name="course_duration" id=""
                                                placeholder="Course Duration">
                                            <label for="course_duration" class="">Course
                                                Duration</label>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div
                                                class="form-floating form-floating-group flex-grow-1">
                                                <input type="file" class="form-control"
                                                    name="course_picture" placeholder="Code 1">
                                                <label for="course_picture">Choose Course
                                                    Picture</label>
                                            </div>
                                        </div>
                                        <button type="button" name="" id=""
                                            class="btn btn-danger rounded-pill text-center m-2 px-4 py-2 remove_create_form" title="Remove above form">
                                            <i class="material-symbols-outlined">remove
                                            </i>
                                        </button>

                                        {{-- Form Column 2 End --}}
                                    </div>


                                </div>
                                {{-- Fields End --}}

                                {{-- Submit Button START --}}
                                {{-- <a href="{{ url('/save') }}" class="btn btn-primary rounded-pill py-3 px-5 text-center">Register</a> --}}
                                {{-- Submit Button END --}}


                            </form>
                        </div>
                        {{-- Template FORM div END --}}

                        {{-- Default Form Start --}}
                        <div id="displayed_forms_div">
                            <form method="post" id="" enctype="multipart/form-data">

                                {{-- Fields Start --}}
                                <div class="row m-4">

                                    {{-- Form Column 1 Start --}}
                                    <div class="col m-1">
                                        <div class="mb-3 form-floating">

                                            <input type="text" class="form-control"
                                                name="course_title" id=""
                                                placeholder="Course Title">
                                            <label for="course_title" class="">Course
                                                Title</label>
                                        </div>

                                        <div class="mb-3 form-floating">
                                            <input type="text" class="form-control"
                                                name="course_price" id=""
                                                placeholder="Price">
                                            <label for="course_price" class="">Price</label>
                                        </div>

                                        <div class="mb-3 form-floating">
                                            <input type="text" class="form-control"
                                                name="course_total_students" id=""
                                                placeholder="Registered Students">
                                            <label for="course_total_students"
                                                class="">Registered
                                                Students</label>
                                        </div>
                                    </div>
                                    {{-- Form Column 1 End --}}

                                    {{-- Form Column 2 Start --}}
                                    <div class="col m-1">
                                        <div class="mb-3 form-floating">

                                            <input type="text" class="form-control"
                                                name="course_instructor" id=""
                                                placeholder="Instructor">
                                            <label for="course_instructor"
                                                class="">Instructor</label>
                                        </div>
                                        <div class="mb-3 form-floating">
                                            <input type="text" class="form-control"
                                                name="course_duration" id=""
                                                placeholder="Course Duration">
                                            <label for="course_duration" class="">Course
                                                Duration</label>
                                        </div>
                                        {{-- <div class="mb-3">
                                <label for="" class="form-label">Choose Course</label>
                                <input type="file" class="form-control" name=""
                                    id="" placeholder="">

                            </div> --}}
                                        <div class="input-group mb-3">
                                            <div
                                                class="form-floating form-floating-group flex-grow-1">
                                                <input type="file" class="form-control"
                                                    name="course_picture"
                                                    placeholder="course_picture">
                                                <label for="course_picture">Choose Course
                                                    Picture</label>
                                            </div>
                                        </div>
                                        <button type="button" name="" id=""
                                            class="btn btn-danger rounded-pill text-center m-2 px-4 py-2 remove_create_form" title="Remove above form">
                                            <i class="material-symbols-outlined">remove
                                            </i>
                                        </button>
                                        {{-- Form Column 2 End --}}

                                    </div>
                                    {{-- Fields End --}}

                                    {{-- Submit Button START --}}
                                    {{-- <a href="{{ url('/save') }}"
                            class="btn btn-primary rounded-pill py-3 px-5 text-center">Register</a> --}}
                                    {{-- Submit Button END --}}
                                </div>

                            </form>
                        </div>
                        {{-- Default Form End --}}



                    </div>
                </div>
                {{-- FORM End  --}}




                {{-- ADD new FORM button start --}}
                <div class="row m-4">
                    <div class="col">

                        <button type="button" name="" id="load_another_form"
                            class="btn btn-dark rounded-pill text-center m-2 px-4 py-2">
                            <i class="material-symbols-outlined">add
                            </i>
                        </button>

                    </div>
                </div>
                {{-- add new FORM button end --}}

                {{-- SUBMIT FORM button start --}}
                <div class="row m-4">
                    <div class="col">

                        <button type="button" name="" id="submit_create_course_form"
                            class="btn btn-success rounded-pill text-center m-2 px-4 py-2">
                            SAVE
                        </button>

                    </div>
                </div>
                {{-- SUBMIT FORM button end --}}
            </div>


            {{-- VIEW FORMS div start --}}
            <div id="edit_course_div" hidden>
                @foreach ($courses_details as $val)
                    <form enctype="multipart/form-data">

                        {{-- Fields Start --}}
                        <div class="row m-4">

                            {{-- Form Column 1 Start --}}
                            <div class="col m-1">
                                <div class="mb-3 form-floating">

                                    <input type="text" class="form-control"
                                        name="course_title" id=""
                                        placeholder="Course Title"
                                        value="{{ $val->course_title }}">
                                    <label for="course_title" class="">Course
                                        Title</label>
                                </div>

                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control"
                                        name="course_price" id="" placeholder="Price"
                                        value="{{ $val->course_price }}">
                                    <label for="course_price" class="">Price</label>
                                </div>

                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control"
                                        name="course_total_students" id=""
                                        placeholder="Registered Students"
                                        value="{{ $val->course_total_students }}">
                                    <label for="course_total_students" class="">Registered
                                        Students</label>
                                </div>
                                <div class=" mb-3" img_id="{{ $val->course_id }}">
                                    <img src="{{ URL::asset('uploaded_images/' . $val->course_picture) }}"
                                        abc="{{ $val->course_id }}" class="img-fluid rounded-top w-25 border border-dark" alt="stored image">
                                </div>
                            </div>
                            {{-- Form Column 1 End --}}

                            {{-- Form Column 2 Start --}}
                            <div class="col m-1">
                                <div class="mb-3 form-floating">

                                    <input type="text" class="form-control"
                                        name="course_instructor" id=""
                                        placeholder="Instructor"
                                        value="{{ $val->course_instructor }}">
                                    <label for="course_instructor"
                                        class="">Instructor</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control"
                                        name="course_duration" id=""
                                        placeholder="Course Duration"
                                        value="{{ $val->course_duration }}">
                                    <label for="course_duration" class="">Course
                                        Duration</label>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div
                                        class="form-floating form-floating-group flex-grow-1">
                                        <input type="file" class="form-control"
                                            name="course_picture"
                                            placeholder="course_picture">
                                        <label for="course_picture">Choose Course
                                            Picture</label>
                                    </div>
                                </div>
                                <div class=" mb-3">
                                <button type="button" name="" abc="{{ $val->course_id }}"
                                    class="btn btn-danger rounded-pill text-center m-2 px-4 py-2 delete_course" title="Delete this course">
                                    <i class="material-symbols-outlined">delete
                                    </i>
                                </button>
                                <button type="button" name="" abc="{{ $val->course_id }}"
                                    class="btn btn-success rounded-pill text-center m-2 px-4 py-2 update_course" title="Update this course">
                                    <i class="material-symbols-outlined">done
                                    </i>
                                </button>
                                </div>

                                {{-- Form Column 2 End --}}
                            </div>


                        </div>
                        {{-- Fields End --}}

                        {{-- Submit Button START --}}
                        {{-- <a href="{{ url('/save') }}" class="btn btn-primary rounded-pill py-3 px-5 text-center">Register</a> --}}
                        {{-- Submit Button END --}}


                    </form>
                @endforeach
            </div>
            {{-- VIEW FORMS div end --}}



        </div>
    </div>
    <!-- Content End -->


    <!-- Footer Start -->
    {{-- <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link">About Us</a>
                    <a class="btn btn-link">Contact Us</a>
                    <a class="btn btn-link">Privacy Policy</a>
                    <a class="btn btn-link">Terms & Condition</a>
                    <a class="btn btn-link">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New
                        York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1"
                                src="{{ URL::asset('assets/img/course-1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1"
                                src="{{ URL::asset('assets/img/course-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1"
                                src="{{ URL::asset('assets/img/course-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1"
                                src="{{ URL::asset('assets/img/course-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1"
                                src="{{ URL::asset('assets/img/course-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1"
                                src="{{ URL::asset('assets/img/course-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom">Your Site Name</a>, All
                        Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom"
                            href="{{ url('https://htmlcodex.com') }}">HTML
                            Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a>Home</a>
                            <a>Cookies</a>
                            <a>Help</a>
                            <a>FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Footer End -->


    <!-- Back to Top -->
    <a class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ url('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script
        src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <script
        src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous "></script>
    <script src="{{ URL::asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/add_course_page.js') }}"></script>

</body>

</html>
