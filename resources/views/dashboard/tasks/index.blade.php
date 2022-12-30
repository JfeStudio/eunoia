<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header">
                            To-do List
                        </div>
                        <div class="card-body">
                            <form action="{{ route('tasks.store') }}" method="post">
                                @csrf
                                <div class="d-flex align-items-start gap-2">
                                    <div class="">
                                        <input type="text"
                                            class="@error('list') is-invalid @enderror form-control form-control-sm "
                                            id="tasks" name="list" aria-describedby="emailHelp"
                                            placeholder="Add your new todo">
                                        @error('list')
                                            <small class='text-danger'
                                                style="--bs-btn-font-size: .75rem;"">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm  text-white">
                                        Add todo
                                    </button>
                                </div>
                            </form>
                            <div class="mt-4 col-md-5">
                                <ul class="list-group list-group-flush">
                                    @foreach ($tasks as $task)
                                        <li class="list-group-item">
                                            <div class='d-flex align-items-center justify-content-between'>
                                                <p class='m-0'>{{ $task->list }}</p>
                                                <div class='d-flex align-items-center gap-2'>
                                                    <button type="submit" class='btn p-0 text-success'><i
                                                            class='mdi mdi-check-circle-outline'></i>
                                                    </button>
                                                    <button type="submit" class='btn p-0 text-warning'><i
                                                            class='mdi mdi-pencil-box-outline'></i>
                                                    </button>
                                                    <form action="{{ route('tasks.destroy', $task->id) }}"
                                                        method="post" onsubmit="return confirm('apakah anda yakin?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class='btn p-0 text-danger'><i
                                                                class='mdi mdi-close-circle-outline'></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
