<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
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
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // buat validasi untuk login sesuai form yang tersedia
        $request->validate([
            'email' => 'required|min:3|email',
            'password' => 'required|min:8',
        ]);
        // lalu kita cek user email yang login
        $user = User::whereEmail($request->email)->first();
        // kita kasih kondisi, klw emailnya bener kita masuk step selanjutnya
        if ($user) {
            // step selanjutnya check password yang di ketikkan di form input apakah sama dengan password user di databasenya
            if (Hash::check($request->password, $user->password)) {
                // klw sama kita ksih akses
                Auth::login($user);
                // lalu mau di redirect kemana klw udah benar + session flash/with
                return redirect('/dashboard')->with('success', 'Selamat Anda Berhasil Login');
            }
        }
        // tapi jika error, kita buat throw messagenya
        throw ValidationException::withMessages([
            'email' => 'email anda salah',
            'password' => 'password anda salah',
        ]);
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