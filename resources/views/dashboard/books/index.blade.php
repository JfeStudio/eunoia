<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fs-5">All Books</h2>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="{{ route('books.create') }}" class="btn btn-primary text-light px-3 me-3">+
                                        Create
                                        Books</a>
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
                                    <form {{ route('jobs.index') }} class="d-flex" role="search" method="get">
                                        <input class="form-control me-2 border-custom rounded-2" name="search"
                                            autofocus type="search" placeholder="Search" aria-label="Search">
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
                                                Title Book
                                            </th>
                                            <th>
                                                Author
                                            </th>
                                            <th>
                                                Terbit
                                            </th>
                                            <th>
                                                Harga
                                            </th>
                                            <th>
                                                Image
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <tr>
                                                <td>
                                                    {{ $i }}
                                                </td>
                                                <td>
                                                    {{ fake()->sentence() }}
                                                </td>
                                                <td>
                                                    {{ fake()->userName() }}
                                                </td>
                                                <td>
                                                    {{ fake()->date('j M Y') }}
                                                </td>
                                                <td>
                                                    {{ fake()->randomNumber(5, true) }}
                                                </td>
                                                <td class='text-center'>
                                                    <img src="{{ fake()->imageUrl(360, 360, 'animals', true, 'dogs', true) }}"
                                                        alt="">
                                                    {{-- <i class='fs-1 text-secondary bx bxs-user-circle'></i> --}}
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
                                                            <li><a href="#" class="dropdown-item"
                                                                    type="button">Edit</a>
                                                            </li>
                                                            <li>
                                                                <button class="dropdown-item"
                                                                    type="submit">Delete</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
