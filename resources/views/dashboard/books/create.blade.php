<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header py-3">
                            {{-- <a class="arrow-left" href="{{ route('jobs.index') }}"><i
                                    class='bx bx-left-arrow-alt fs-4 text-dark'></i></a> --}}
                            <h2 class="card-title fs-5 mb-0">Create Jobs</h2>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('books.store') }}" method="post" class="row g-3"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="book" class="form-label fs-7">Title Book</label>
                                    <input type="text" name="book" value="{{ old('book') }}"
                                        class="@error('book') is-invalid @enderror form-control border-custom rounded-2"
                                        id="book" placeholder="Title Book">
                                    @error('book')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="terbit" class="form-label fs-7">Terbit</label>
                                    <input type="date" name="terbit" value="{{ old('terbit') }}"
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
                                        <option selected disabled>choose your author</option>
                                        <option value="Bambang"
                                            @if (old('author') == 'Bambang') {{ 'selected' }} @endif>Bambang
                                        </option>
                                        <option value="Angga"
                                            @if (old('author') == 'Angga') {{ 'selected' }} @endif>Angga</option>
                                        <option value="Nada"
                                            @if (old('author') == 'Nada') {{ 'selected' }} @endif>Nada</option>
                                        <option value="Wiliam"
                                            @if (old('author') == 'Wiliam') {{ 'selected' }} @endif>Wiliam</option>
                                    </select>
                                    @error('author')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="harga" class="form-label fs-7">Harga</label>
                                    <input type="text" name="harga" value="{{ old('terbit') }}"
                                        class="@error('terbit') is-invalid @enderror form-control border-custom rounded-2"
                                        id="harga" placeholder="Targa Buku">
                                    @error('terbit')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="formFileSm" class="form-label">Image</label>
                                    <input
                                        class="@error('image') is-invalid @enderror form-control form-control rounded-2"
                                        id="formFileSm" type="file" name="image">
                                    @error('image')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
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
