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
                                        @foreach ($books as $book)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td style="text-transform: capitalize">
                                                    {{ $book->book }}
                                                </td>
                                                <td>
                                                    {{ $book->author }}
                                                </td>
                                                <td>
                                                    {{ $book->terbit }}
                                                </td>
                                                <td>
                                                    {{ $book->harga }}
                                                </td>
                                                <td class='text-center'>
                                                    @if ($book->image)
                                                        <img src="/image/{{ $book->image }}" alt="image">
                                                    @else
                                                        <img src="{{ fake()->imageUrl(360, 360, 'animals', true, 'dogs', true) }}"
                                                            alt="">
                                                    @endif
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
                                        @endforeach
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
