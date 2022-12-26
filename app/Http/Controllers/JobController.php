<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('job_id', 'DESC')->paginate('5');
        return view('dashboard.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('dashboard.jobs.create');
    }

    /**
     * Store a newly created resource in storage.

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // kita buat validasi dlu
        $request->validate([
            'job_id' => 'required|string|min:3|unique:jobs,job_id',
            'job_name' => 'required|string|min:3',
            'deadline' => 'required|string|min:3',
            'status' => 'required|string|min:3',
            'employer' => 'required|string|min:3',
            'location' => 'required|string|min:3',
        ]);
        $jobs = [
            'job_id' => $request->job_id,
            'job_name' => $request->job_name,
            'deadline' => $request->deadline,
            'status' => $request->status,
            'employer' => $request->employer,
            'location' => $request->location,
        ];
        Job::create($jobs);
        return to_route('jobs.index')->with('success', 'A successful create data jobs!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::where('job_id', $id)->first();
        return view('dashboard.jobs.edit', [
            'job' => $job,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_name' => 'required|string|min:3',
            'deadline' => 'required|string|min:3',
            'status' => 'required|string|min:3',
            'employer' => 'required|string|min:3',
            'location' => 'required|string|min:3',
        ]);
        $jobs = [
            'job_name' => $request->job_name,
            'deadline' => $request->deadline,
            'status' => $request->status,
            'employer' => $request->employer,
            'location' => $request->location,
        ];
        Job::where('job_id', $id)->update($jobs);
        return to_route('jobs.index')->with('success', 'A successful update data jobs!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}