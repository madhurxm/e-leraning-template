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
                                    <a class="nav-link active"
                                        href="{{ url('/admin/instructor/all') }}">All
                                        Instructors</a>
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
                        <table
                            class="table table-striped
                    table-hover	
                    table-borderless
                    table-primary
                    align-middle">
                            <thead class="table-light">
                                <caption>Instructors</caption>
                                <tr>
                                    <th>Instructor Name</th>
                                    <th>FB Profile ID</th>
                                    <th class="text-center">Profile Picture</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($instructors as $val)
                                    <tr class="table-primary">
                                        <td>{{ $val->instructor_name }}</td>
                                        <td>{{ $val->instructor_profile }}</td>
                                        <td class="text-center">
                                            <img src="{{ URL::asset('/uploaded_images/Instructor_PFP/' . $val->instructor_pfp) }}"
                                                class="img-fluid rounded-top" alt="as"
                                                width="40px" height="40px">
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-secondary"
                                                href="{{ route('instructor_table_editBtn', [$val->instructor_id]) }}"
                                                role="button">Edit</a>
                                        </td>
                                        <td>
                                            <!-- Delete Button trigger modal -->
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $val->instructor_id }}">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade"
                                                id="deleteModal{{ $val->instructor_id }}"
                                                tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $val->instructor_id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5"
                                                                id="deleteModalLabel{{ $val->instructor_id }}">
                                                                Confirm Delete
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure to delete record of
                                                            {{ $val->instructor_name }}?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-secondary"
                                                                data-bs-dismiss="modal">NO</button>
                                                            <a class="btn btn-outline-danger"
                                                                href="{{ route('instructor_table_deleteBtn', [$val->instructor_id]) }}"
                                                                role="button">Yes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
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
