@include('admin.admin_header_template');

<div class="content text-white bg-white">
    <div class="container py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">

            {{-- NAV BAR START --}}
            <div class="row-cols-1 row justify-content-center align-items-center g-2">
                <div class="col">
                    <nav class="navbar navbar-expand-sm bg-dark navbar-light">
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ url('/admin/instructor') }}">Create Instructor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All Instructors</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- NAV BAR END --}}

            {{-- TABLE START --}}

            <div class="row row-cols-1 justify-content-center align-items-center g-2 my-3 ">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped
                    table-hover	
                    table-borderless
                    table-primary
                    align-middle">
                        <thead class="table-light">
                            <caption>Instructors</caption>
                            <tr>
                                <th>Instructor Name</th>
                                <th>FB Profile ID</th>
                                <th>Profile Picture</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="table-primary" >
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                    </table>
                </div>
                
            </div>
            </div>

            {{-- TABLE END --}}
        </div>
    </div>
</div>


@include('admin.admin_footer_template');
