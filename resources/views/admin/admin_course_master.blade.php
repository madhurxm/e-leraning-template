


































































































































































































































































































<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link href="{{ URL::asset('assets/admin/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap') }}"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ URL::asset('assets/admin/lib/owlcarousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ URL::asset('assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <div class="row">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;"
                role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        
        <div class="sidebar pe-4 pb-3 col-2">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ URL::asset('assets/admin/index.html') }}"
                    class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>E-Learning</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="" alt=""
                            style="width: 40px; height: 40px;">

                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Ashish</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ URL::asset('assets/admin/index.html') }}"
                        class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ URL::asset('assets/admin/button.html') }}"
                                class="dropdown-item">Buttons</a>
                            <a href="{{ URL::asset('assets/admin/typography.html') }}"
                                class="dropdown-item">Typography</a>
                            <a href="{{ URL::asset('assets/admin/element.html') }}"
                                class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="{{ URL::asset('assets/admin/widget.html') }}"
                        class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="{{ URL::asset('assets/admin/form.html') }}"
                        class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ URL::asset('assets/admin/signin.html') }}"
                                class="dropdown-item">Sign In</a>
                            <a href="{{ URL::asset('assets/admin/signup.html') }}"
                                class="dropdown-item">Sign Up</a>
                            <a href="{{ URL::asset('assets/admin/404.html') }}"
                                class="dropdown-item">404 Error</a>
                            <a href="{{ URL::asset('assets/admin/blank.html') }}"
                                class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    
    <!-- Sidebar End -->


    <!-- Content Start -->

    <div class="alert alert-dark m-1 fadeInUp" hidden role="alert" id="massage"
        style="position: fixed; z-index: 10;">
        Success.......!!
    </div>

    <!-- Content Start -->
    <div class=" py-5 wow fadeInUp position-absolute" data-wow-delay="0.1s">
        <div class="">
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
                                            class="btn btn-danger rounded-pill text-center m-2 px-4 py-2 remove_create_form"
                                            title="Remove above form">
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
                                            class="btn btn-danger rounded-pill text-center m-2 px-4 py-2 remove_create_form"
                                            title="Remove above form">
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
                                        abc="{{ $val->course_id }}"
                                        class="img-fluid rounded-top w-25 border border-dark"
                                        alt="stored image">
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
                                    <div class="form-floating form-floating-group flex-grow-1">
                                        <input type="file" class="form-control"
                                            name="course_picture" placeholder="course_picture">
                                        <label for="course_picture">Choose Course
                                            Picture</label>
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <button type="button" name=""
                                        abc="{{ $val->course_id }}"
                                        class="btn btn-danger rounded-pill text-center m-2 px-4 py-2 delete_course"
                                        title="Delete this course">
                                        <i class="material-symbols-outlined">delete
                                        </i>
                                    </button>
                                    <button type="button" name=""
                                        abc="{{ $val->course_id }}"
                                        class="btn btn-success rounded-pill text-center m-2 px-4 py-2 update_course"
                                        title="Update this course">
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

    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ url('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script
        src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ URL::asset('assets/admin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/lib/tempusdominus/js/moment-timezone.min.js') }}">
    </script>
    <script
        src="{{ URL::asset('assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>

    <!-- Template Javascript -->
    <script src="{{ URL::asset('assets/admin/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/js/add_course_page.js') }}"></script>
</body>

</html>
