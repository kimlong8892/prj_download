<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function Reg(Request $request) {
        return view('user.reg');
    }

    public function Login(Request $request) {
        return view('user.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginPost(Request $request)
    {
        $user = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if (Auth::attempt($user)) {
            return redirect('/');
        } else {
            return redirect()->route('user.login')->with('error-login', "Sai email hoặc mật khẩu !");
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function regPost(Request $request)
    {
        // check email exists
        if (\App\User::where('email', $request->get('email'))->count() > 0) {
            return redirect()->route('user.reg')->with('error-reg', 'Email này đã tồn tại !!!');
        }

        $user = new \App\User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
        $user->setAttribute('bio', 'update...');
        $user->save();
        Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        return redirect('/');
    }

}
