<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fs-5">All Jobs</h2>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="{{ route('jobs.create') }}" class="btn btn-primary text-light px-3 me-3">+
                                        Create
                                        Jobs</a>
                                    <button type="submit" class='btn btn-light p-2'>
                                        <i class='bx bx-refresh'></i>
                                    </button>
                                    <button type="submit" class='btn btn-light p-2'>
                                        <i class='bx bxs-edit'></i>
                                    </button>
                                    <button type="submit" class='btn btn-light p-2'>
                                        <i class='bx bx-trash'></i>
                                    </button>
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle px-3" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='d-flex align-items-center gap-2'>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2 border-custom rounded-2" type="search"
                                            placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success py-2" type="submit">Search</button>
                                    </form>
                                    <button class="btn btn-light dropdown-toggle px-3" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Filter By
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive-md pt-3">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>
                                                Job ID
                                            </th>
                                            <th>
                                                Job Name
                                            </th>
                                            <th>
                                                Created Date
                                            </th>
                                            <th>
                                                Deadline
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Employer
                                            </th>
                                            <th>
                                                Location
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = $jobs->firstItem(); ?>
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <td>
                                                    {{ $i }}
                                                </td>
                                                <td>
                                                    {{ $job->job_id }}
                                                </td>
                                                <td>
                                                    {{ $job->job_name }}
                                                </td>
                                                <td>
                                                    {{ $job->created_at->format('j M Y, g:i a') }}
                                                </td>
                                                <td>
                                                    {{ $job->deadline }}
                                                </td>
                                                <td>
                                                    {{ $job->status }}
                                                </td>
                                                <td>
                                                    {{ $job->employer }}
                                                </td>
                                                <td>
                                                    {{ $job->location }}
                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn p-2" type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class='bx bx-dots-vertical-rounded'></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><button class="dropdown-item"
                                                                    type="button">Detail</button>
                                                            </li>
                                                            <li><button class="dropdown-item"
                                                                    type="button">Edit</button>
                                                            </li>
                                                            <li><button class="dropdown-item"
                                                                    type="button">Delete</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapboper ends -->
        <!-- partial -->
    </div>
</x-app-layout>
