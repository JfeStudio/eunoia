<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header py-3">
                            <h2 class="card-title fs-5 mb-0">Edit Books</h2>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('books.update', $book) }}" method="post" class="row g-3"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-4">
                                    <label for="book" class="form-label fs-7">Title Book</label>
                                    <input type="text" name="book" value="{{ old('book', $book->book) }}"
                                        class="@error('book') is-invalid @enderror form-control border-custom rounded-2"
                                        id="book" placeholder="Title Book">
                                    @error('book')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="terbit" class="form-label fs-7">Terbit</label>
                                    <input type="date" name="terbit" value="{{ old('terbit', $book->terbit) }}"
                                        class="@error('terbit') is-invalid @enderror form-control border-custom rounded-2"
                                        id="terbit" placeholder="Tahun Terbit">
                                    @error('terbit')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="inputAuthor" class="form-label">Author</label>
                                    <select id="inputAuthor" name="author"
                                        class="@error('author') is-invalid @enderror form-select py-2">
                                        <option value="Bambang" {{ $book->author == 'Bambang' ? 'selected' : '' }}>
                                            Bambang
                                        </option>
                                        <option value="Angga" {{ $book->author == 'Angga' ? 'selected' : '' }}>Angga
                                        </option>
                                        <option value="Nada" {{ $book->author == 'Nada' ? 'selected' : '' }}>Nada
                                        </option>
                                        <option value="Wiliam" {{ $book->author == 'Wiliam' ? 'selected' : '' }}>Wiliam
                                        </option>
                                    </select>
                                    @error('author')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="harga" class="form-label fs-7">Harga</label>
                                    <input type="text" name="harga" value="{{ old('terbit', $book->harga) }}"
                                        class="@error('terbit') is-invalid @enderror form-control border-custom rounded-2"
                                        id="harga" placeholder="Targa Buku">
                                    @error('harga')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="formFileSm" class="form-label">Image</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <input
                                            class="@error('image') is-invalid @enderror form-control form-control rounded-2"
                                            id="formFileSm" type="file" name="image">
                                        @if ($book->image)
                                            <img style="width: 40px; height: 40px; border-radius: 50%"
                                                src="/image/{{ $book->image }}" alt="image">
                                        @else
                                            <img style="width: 40px; height: 40px; border-radius: 50%"
                                                src="{{ fake()->imageUrl(360, 360, 'animals', true, 'dogs', true) }}"
                                                alt="">
                                        @endif
                                        @error('image')
                                            <small class='text-danger'>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary text-light px-3 me-1">Create
                                        Book</button>
                                    <a href="{{ route('books.index') }}"
                                        class="btn btn-light text-dark px-3">Cencel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapboper ends -->
        <!-- partial -->
    </div>
</x-app-layout>
