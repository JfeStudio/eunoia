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
                            <form action="{{ route('jobs.store') }}" method="post" class="row g-3"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="jobid" class="form-label fs-7">JOB ID</label>
                                    <input type="text" name="job_id" value="{{ old('job_id') }}"
                                        class="@error('job_id') is-invalid @enderror form-control border-custom rounded-2"
                                        id="jobid" placeholder="JID-01">
                                    @error('job_id')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="jobname" class="form-label fs-7">JOB NAME</label>
                                    <input type="text" name='job_name' value="{{ old('job_name') }}"
                                        class="@error('job_name') is-invalid @enderror form-control border-custom rounded-2"
                                        id="jobname" placeholder="Frontend Developer">
                                    @error('job_name')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="employer" class="form-label fs-7">Employer</label>
                                    <input type="text" name="employer" value="{{ old('employer') }}"
                                        class="@error('employer') is-invalid @enderror form-control border-custom rounded-2"
                                        id="employer" placeholder="Manager">
                                    @error('employer')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="jobdl" class="form-label fs-7">DEADLINE</label>
                                    <input type="date" name="deadline" value="{{ old('deadline') }}"
                                        class="@error('deadline') is-invalid @enderror form-control border-custom rounded-2"
                                        id="jobdl" placeholder="JOB NAME">
                                    @error('deadline')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="inputStatus" class="form-label">Status</label>
                                    <select id="inputStatus" name="status"
                                        class="@error('status') is-invalid @enderror form-select py-2">
                                        <option selected disabled>choose your status</option>
                                        <option value="Published"
                                            @if (old('status') == 'Published') {{ 'selected' }} @endif>Published
                                        </option>
                                        <option value="Published Review"
                                            @if (old('status') == 'Published Review') {{ 'selected' }} @endif>Published
                                            Review</option>
                                        <option value="Draft"
                                            @if (old('status') == 'Draft') {{ 'selected' }} @endif>Draft</option>
                                    </select>
                                    @error('status')
                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="inputLocation" class="form-label">Location</label>
                                    <select id="inputLocation" name="location"
                                        class="@error('location') is-invalid @enderror form-select py-2">
                                        <option selected disabled>choose your location</option>
                                        <option value="Probolinggo"
                                            @if (old('location') == 'Probolinggo') {{ 'selected' }} @endif>Probolinggo
                                        </option>
                                        <option value="Jakarta"
                                            @if (old('location') == 'Jakarta') {{ 'selected' }} @endif>Jakarta
                                        </option>
                                        <option value="Bandung"
                                            @if (old('location') == 'Bandung') {{ 'selected' }} @endif>Bandung
                                        </option>
                                        <option value="Surabaya"
                                            @if (old('location') == 'Surabaya') {{ 'selected' }} @endif>Surabaya
                                        </option>
                                        <option value="Semarang"
                                            @if (old('location') == 'Semarang') {{ 'selected' }} @endif>Semarang
                                        </option>
                                    </select>
                                    @error('location')
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
