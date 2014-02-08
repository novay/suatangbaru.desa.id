<?php

class AuthController extends BaseController {

    /**
     * Authentikasi otomatis.
     *
     * @return View
     */
    function getAdmin()
    {
        // Jika tidak, masuk ke dashboard admin
        return View::make('backend.index');
    }

    /**
     * Tuju ke halaman Login.
     *
     * @return View
     */
    function getLogin()
    {
        // Jika user masih sebagai tamu
        if (Auth::guest())

            // Tampilkan halaman login
            return View::make('backend.login');

        // Jika tidak, masuk ke dashboard admin
        return Redirect::to('admin');
    }

    /**
     * Cocokkan akun user.
     *
     * @return Route
     */
    function postLogin()
    {
        // Proses pencocokan
        $userdata = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];

        // Jika cocok
        if ( Auth::attempt($userdata) )
        {
            // Masuk ke halaman admin
            return Redirect::to('admin');
        }
        else
        {
            // Jika gagal, kembali kehalaman login dengan pesan error
            return Redirect::to('login')
                ->with('login_errors', true)
                ->withInput();
        }
    }

    /**
     * Keluar bro.
     *
     * @return Route
     */
    function getLogout()
    {
        // Keluar dari session admin
        Auth::logout(); 

        // Kembali ke halaman login
        return Redirect::to('login');
    }
}
?>