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
                                    <button type="button" class="btn btn-primary px-3 me-3">+ Create
                                        Jobs</button>
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
                                        <input class="form-control me-2 py-2" type="search" placeholder="Search"
                                            aria-label="Search">
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
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                JID-01
                                            </td>
                                            <td>
                                                Laravel-9 Developer
                                            </td>
                                            <td>
                                                July 05, 2022
                                            </td>
                                            <td>
                                                May 15, 2022
                                            </td>
                                            <td>
                                                Published
                                            </td>
                                            <td>
                                                Leap Life Technology
                                            </td>
                                            <td>
                                                Silicon Valley
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button class="btn p-2" type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><button class="dropdown-item" type="button">Action</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button">Another
                                                                action</button></li>
                                                        <li><button class="dropdown-item" type="button">Something else
                                                                here</button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                JID-02
                                            </td>
                                            <td>
                                                Laravel-8 Developer
                                            </td>
                                            <td>
                                                July 05, 2022
                                            </td>
                                            <td>
                                                May 15, 2022
                                            </td>
                                            <td>
                                                Published
                                            </td>
                                            <td>
                                                Leap Life Technology
                                            </td>
                                            <td>
                                                Silicon Valley
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button class="btn p-2" type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><button class="dropdown-item" type="button">Action</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button">Another
                                                                action</button></li>
                                                        <li><button class="dropdown-item" type="button">Something else
                                                                here</button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
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
