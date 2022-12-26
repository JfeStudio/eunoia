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
                            <form action="{{ route('jobs.store') }}" method="post" class="row g-3">
                                @csrf
                                <div class="col-md-4">
                                    <label for="jobid" class="form-label fs-7">JOB ID</label>
                                    <input type="text" name="job_id" class="form-control border-custom rounded-2"
                                        id="jobid" placeholder="JID-01">
                                </div>
                                <div class="col-md-4">
                                    <label for="jobname" class="form-label fs-7">JOB NAME</label>
                                    <input type="text" name='job_name' class="form-control border-custom rounded-2"
                                        id="jobname" placeholder="Frontend Developer">
                                </div>
                                <div class="col-md-4">
                                    <label for="employer" class="form-label fs-7">Employer</label>
                                    <input type="text" name="employer" class="form-control border-custom rounded-2"
                                        id="employer" placeholder="Manager">
                                </div>
                                <div class="col-md-4">
                                    <label for="jobdl" class="form-label fs-7">DEADLINE</label>
                                    <input type="date" name="deadline" class="form-control border-custom rounded-2"
                                        id="jobdl" placeholder="JOB NAME">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputStatus" class="form-label">Status</label>
                                    <select id="inputStatus" name="status" class="form-select py-2">
                                        <option selected disabled>choose your status</option>
                                        <option value="Published">Published</option>
                                        <option value="Published Review">Published Review</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputLocation" class="form-label">Location</label>
                                    <select id="inputLocation" name="location" class="form-select py-2">
                                        <option selected disabled>choose your location</option>
                                        <option value="Probolinggo">Probolinggo</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Semarang">Semarang</option>
                                    </select>
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
