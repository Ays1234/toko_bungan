<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Uuid;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum', ['except' => ['index', 'login', 'register','logout']]);
    }

    /**
     * Display a listing of the resource.
     *
     *  Web Routes API Routes create by https://github.com/yogi-maulana-dev
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        return view('backend/login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function login(Request $request)
    {
        $validation=$request->validate(['email' => 'required|email:dns', 'password' => 'required']);
        $validation = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
 
        if (Auth::attempt($validation)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
 
        return back()->with('loginError', 'Login failed');
        // $user = User::where('email', $request->email)->first();
        // if (!$user || !\Hash::check($request->password, $user->password)) {
        //     return response()->json(
        //         [
        //             'message' => 'ANAOUTHORIZED',
        //         ],
        //         401,
        //     );
        //     dd('gagal');
        // }
        // $token = $user->createToken('token-name')->plainTextToken;
        // return response()->json(
        //     [
        //         'message' => 'success',
        //         'user' => $user,
        //         'token' => $token,
        //     ],
        //     200,
        // );
        return redirect()->intended('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}
