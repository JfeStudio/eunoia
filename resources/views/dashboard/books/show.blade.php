<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('books.index') }}"
                                class='d-inline text-dark mdi mdi-arrow-left-bold mb-2 fs-4'></a>
                            <div class="card m-auto rounded-3 overflow-hidden" style="width: 16.5rem;">
                                <img class='w-100' style='height: 250px; background-position: center;'
                                    src="/image/{{ $book->image }}" class="card-img-top border" alt="...">
                                <div class="card-body p-3">
                                    <h5 class="card-title mb-2">{{ $book->book }}</h5>
                                    <div class='d-flex align-items-center my-1 text-warning gap-1'>
                                        <i class='mdi mdi-star'></i>
                                        <i class='mdi mdi-star'></i>
                                        <i class='mdi mdi-star'></i>
                                        <i class='mdi mdi-star'></i>
                                        <i class='mdi mdi-star-half'></i>
                                        <span style="font-size: .75rem" class='text-secondary'>(253)</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="card-text mb-0 fw-bold">{{ $book->harga }}</p>
                                        <del style="font-size: .8rem" class="card-text mb-0 text-secondary">30000</del>
                                    </div>
                                    <button type="submit" class="mt-2 btn btn-primary border-custom text-white">Beli
                                        Buku</button>
                                    <p style="font-size: .8rem" class="card-text mt-3 text-secondary">
                                        Tahun terbit : {{ $book->terbit }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
