<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header">
                            To-do List : <b>Edit Task</b>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('tasks.update', $task->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="d-flex align-items-start gap-2">
                                    <div class="">
                                        <input type="text"
                                            class="@error('list') is-invalid @enderror form-control form-control-sm "
                                            id="tasks" name="list" value="{{ $task->list }}" autofocus
                                            aria-describedby="emailHelp" placeholder="Add your new todo">
                                        @error('list')
                                            <small class='text-danger'
                                                style="--bs-btn-font-size: .75rem;"">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-sm  text-white">
                                        Edit
                                    </button>
                                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary btn-sm  text-white">
                                        Cencel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
