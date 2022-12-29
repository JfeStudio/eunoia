<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $jobs = Job::where('job_name', 'LIKE', '%' .$request->search. '%')->
            orWhere('employer', 'LIKE', '%' .$request->search. '%')->orderBy('job_id')->paginate('4');
        }else{
            $jobs = Job::orderBy('job_id')->paginate('4');
        }
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
    public function store(JobRequest $request)
    {
            $jobs = $request->all();
            // $request->all() untuk masukan datanya semua + token @csrf
            // lalu jika kita ingin nullable untuk field image bisa di kasih kondisi
            // kita buat file() dan tulis nama folder di dalamnya
            if ( $file_image = $request->file('image')) {
            // maksudnya, jika tidak ada gambar maka tidk apa2, tinggal nanti di kasih kondisi juga di viewnya
            // sebenarnya kita juga bisa membuat variable untuk menyimpan format image nya (opsional)
            // tapi untuk kasus sekarng aku langsung taruh di dalam $name_image saja.
            $name_image = date('ymdhis') . "." . $file_image->getClientOriginalExtension(); // bisa juga getClientOriginalExtension() di ganti dengan extension()
            // lalu tahap selanjutnya kita akan pindahkan file imagenya berserta name image nya yang sudah kita custom namenya menggunakan date()
            $file_image->move(public_path('image'), $name_image);
            // lalu kita cari data image di dalam object si jobs + name imagenya
            $jobs['image'] = $name_image;
            }
        // dd($jobs);
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
            'image' => 'mimes:jpeg,jpg,png,gif',
        ]);
        // pengecekan validation di lakukan di JobRequest, soalnya aku udh pindah validasinya
        // lalu kita pake except supaya token dan method tidak ikut di dalam put edit karna kita mau dupm semuanya
        $jobs = $request->except(['_token', '_method']);
        // selesai pengecekan, maka datanya yg akan masuk dengan data yang hanya di perbolehkan, kecuali yg kita except tidak akan ikut masuk
        // intinya klw kita gunakan all(), itu requestnya dia mengngembalikan semuanya.
        // $jobs = $request->all();
        // dd($jobs);
        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            // maksudnya, jika tidak ada gambar maka tidk apa2, tinggal nanti di kasih kondisi juga di viewnya
            // sebenarnya kita juga bisa membuat variable untuk menyimpan format image nya (opsional)
            // tapi untuk kasus sekarng aku langsung taruh di dalam $name_image saja.
            $name_image = date('ymdhis') . "." . $file_image->getClientOriginalExtension(); // bisa juga getClientOriginalExtension() di ganti dengan extension()
            // lalu tahap selanjutnya kita akan pindahkan file imagenya berserta name image nya yang sudah kita custom namenya menggunakan date()
            $file_image->move(public_path('image'), $name_image);
            // lalu kita cari data image di dalam object si jobs + name imagenya
            // delete foto
            $jobs = Job::where('job_id', $id)->first();
            File::delete(public_path('image') . '/' . $jobs->image);
            // $jobs['image'] = $name_image;
            $jobs = ['image' => $name_image];
            }
            // else {
            //     unset($jobs['image']);
            // }
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
        $jobs = Job::where('job_id', $id)->first();
        File::delete(public_path('image') . '/' . $jobs->image);
        Job::where('job_id', $id)->delete();
        return to_route('jobs.index')->with('success', 'A successful delete data jobs!.');
    }
}