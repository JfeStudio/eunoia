<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view untuk menampilkan view dari auth register
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // buat validationnya dlu biar mantapp. (jangan lupa yang unique)
        $request->validate([
            'username' => 'required|unique:users|min:3|alpha_num',
            'name' => 'required|min:3|string',
            'email' => 'required|email|unique:users|min:3|string',
            'password' => 'required|min:8|string',
        ]);
        // lalu kita buat variable lagi untuk menampung users
        $users = [
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            // jgan lupa klw request password pake hash, biar nanti passwordnya di random
            'password' => Hash::make($request->password),
        ];
        // selain pake unique:users, ada cara lain juga untuk mengecek user yang sama, dengan di kondisi di bawah ini
        // $users = User::where('username', $request->username)->orWhere('email', $request->email)->first();
        // if ($users) {
        //     dd('user sudah ada');
        // };
        // return dd('success')
        // sebenarnya kita juga bisa langsung memasukkan datanya kedalam create()
        User::create($users);
        // klw kondisi semua terpenuhi, kita mau redirect kemana, dan jgn lupa kasih session flash juga / flash message
        session()->flash('success', 'selamat anda sudah mendaftar');
        return redirect('/dashboard');
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
        //
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
        //
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