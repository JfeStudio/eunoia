<x-app-layout>
    <div class="main-panel">
        <div class="content-wrapper p-3">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header py-3">
                            <h2 class="card-title fs-5 mb-0">Edit Jobs : {{ $job->created_at->format('j M Y') }}
                            </h2>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('jobs.update', $job->job_id) }}" method="post" class="row g-3"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-4">
                                    <label for="jobid" class="form-label fs-7">JOB ID</label>
                                    <input type="text" disabled name="job_id"
                                        value="{{ old('job_id', $job->job_id) }}"
                                        class="form-control border-custom rounded-2" id="jobid"
                                        placeholder="JID-01">
                                </div>
                                <div class="col-md-4">
                                    <label for="jobname" class="form-label fs-7">JOB NAME</label>
                                    <input type="text" name='job_name' value="{{ old('job_name', $job->job_name) }}"
                                        class="@error('job_name') is-invalid @enderror form-control border-custom rounded-2"
                                        id="jobname" placeholder="Frontend Developer">
                                    @error('job_name')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="employer" class="form-label fs-7">Employer</label>
                                    <input type="text" name="employer" value="{{ old('employer', $job->employer) }}"
                                        class="@error('employer') is-invalid @enderror form-control border-custom rounded-2"
                                        id="employer" placeholder="Manager">
                                    @error('employer')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="jobdl" class="form-label fs-7">DEADLINE</label>
                                    <input type="date" name="deadline" value="{{ old('deadline', $job->deadline) }}"
                                        class="@error('deadline') is-invalid @enderror form-control border-custom rounded-2"
                                        id="jobdl" placeholder="JOB NAME">
                                    @error('deadline')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="inputStatus" class="form-label">Status</label>
                                    <select id="inputStatus" name="status"
                                        class="@error('status') is-invalid @enderror form-select py-2">
                                        <option value="Published" {{ $job->status == 'Published' ? 'selected' : '' }}>
                                            Published
                                        </option>
                                        <option value="Published Review"
                                            {{ $job->status == 'Published Review' ? 'selected' : '' }}>
                                            Published
                                            Review</option>
                                        <option value="Draft" {{ $job->status == 'Draft' ? 'selected' : '' }}>Draft
                                        </option>
                                    </select>
                                    @error('status')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="inputLocation" class="form-label">Location</label>
                                    <select id="inputLocation" name="location"
                                        class="@error('location') is-invalid @enderror form-select py-2">
                                        <option value="Probolinggo"
                                            {{ $job->location == 'Probolinggo' ? 'selected' : '' }}>Probolinggo
                                        </option>
                                        <option value="Jakarta" {{ $job->location == 'Jakarta' ? 'selected' : '' }}>
                                            Jakarta
                                        </option>
                                        <option value="Bandung" {{ $job->location == 'Bandung' ? 'selected' : '' }}>
                                            Bandung
                                        </option>
                                        <option value="Surabaya" {{ $job->location == 'Surabaya' ? 'selected' : '' }}>
                                            Surabaya
                                        </option>
                                        <option value="Semarang" {{ $job->location == 'Semarang' ? 'selected' : '' }}>
                                            Semarang
                                        </option>
                                    </select>
                                    @error('location')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4 d-flex align-items-center gap-2 mb-3">
                                    @if ($job->image)
                                        {{-- <label for="formFileSm" class="form-label">Image</label> --}}
                                        <img style="width: 50px; height: 50px; border-radius: 50%"
                                            src="/image/{{ $job->image }}" alt="image">
                                    @else
                                        <i class='fs-1 text-secondary bx bxs-user-circle'></i>
                                    @endif
                                    <input
                                        class="@error('image') is-invalid @enderror form-control form-control rounded-2"
                                        id="formFileSm" type="file" name="image">
                                    @error('image')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary text-light px-3 me-1">Edit
                                        Job</button>
                                    <a href="{{ route('jobs.index') }}" class="btn btn-light text-dark px-3">Cencel</a>
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
