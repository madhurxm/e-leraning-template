@include('admin.admin_header_template');

<div class="content bg-white">
    <div class="container py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">

            {{-- NAV BAR START --}}

            <div class="row-cols-1 row justify-content-center align-items-center g-2 text-white">
                <div class="col">
                    <nav class="navbar navbar-expand-sm bg-dark navbar-light">
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active">Create Instructor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ url('/admin/instructor/all') }}">All Instructors</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- NAV BAR END --}}

            {{-- FORM START --}}

            <div
                class="row-cols-1 row justify-content-center align-items-center my-3 g-2 bg-white text-dark">
                <div class="col" >

                    <form action="POST" class="px-5">

                        <div class="mb-3 ">
                            <label for="" class="form-label">Instructor Name</label>
                            <input type="text" class="form-control" name="" id="" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">FB Profile ID</label>
                            <input type="text" class="form-control" name="" id="" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" name="" id="" placeholder="">
                        </div>

                        <button type="button" class="btn btn-success">SAVE</button>

                    </form>

                </div>
            </div>

            {{-- FORM END --}}

        </div>
    </div>
</div>


@include('admin.admin_footer_template');
