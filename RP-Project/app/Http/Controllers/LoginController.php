<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function logins(Request $request)
    {
        
        $user2 = new user();

        $username = $request->username;
        $pass = $request->password;

        $user = user::where(['username' => $username, 'password' => $pass])->get();
        // $user = user::where('username', $username)->get();
        // $nama = $akun->nama_lengkap;
        $tbuser = User::where('username', $username)->get('password')->first();

        if (count($user) > 0) {
            Session::put("user", $user);
            // $akun = User::where(['username' => $request->username])->get('nama_lengkap');
            Alert::success('LOGIN BERHASIL', "Selamat Datang '$username' ");
            return redirect()->route("dashboard");
        } else {
            return back()->with('loginEror', true);
        }


        //Hashing Pssword
        // if(count($user) < 1 || !$user || !Hash::check($pass, $tbuser->password))
        // {
        //     return back()->with('loginEror', true);
        // }
        // elseif(count($user) > 0)
        // {
        //     Session::put("user", $user);
        //     $akun = User::where(['username' => $request->username])->get('nama_lengkap');
        //     Alert::success('LOGIN BERHASIL', "Selamat Datang '$username' ");
        //     return redirect()->route("dashboard");
        // }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function create_login(Request $request)
    {
        $user = new user();
        // $pass = password_hash($request->password, PASSWORD_DEFAULT);
        $user->username = $request->create_username;
        $user->password = $request->create_password;
        // $user->password = Hash::make($request->password);
        // $user->nama = $request->nama;
        $user->email = $request->create_email;
        // $user->role = $request->role;
        // $user->skils = $request->skils;
        // $user->tgl_lahir = $request->tgl_lahir;
        // $user->gender = $request->gender;
        // $user->notelp = $request->notelp;
        // $user->alamat = $request->alamat;
        // $user->foto = $request->foto;
        // $user->cv = $request->cv;
        // $user->sertifikasi = $request->sertifikasi;
        Session::flash('addUser', $user->save());
        Alert::success('Create Account Successfully', "Silahkan Login");
        return redirect()->route("katalog");
    }
}
