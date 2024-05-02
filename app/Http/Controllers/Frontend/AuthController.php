<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;

class AuthController extends Controller
{
	public function showLoginForm()
	{
		return view('frontend.auth.login');
	}


	public function login(Request $request)
	{
		$request->validate([
			'email' => 'required|string|email|max:255',
			'password' => 'required|string|min:8',
		]);

		$user = User::where('email', $request->email)->first();

		if ($user->is_admin == 0) {

			$credentials = $request->only('email', 'password');

			if (Auth::attempt($credentials)) {

				return redirect()->route('user.profile');
			}
		}else{
			return redirect()->route('user.login')->with('error', 'You have no permission to login'); 
		}
	}


	public function showRegisterForm()
	{
		return view('frontend.auth.register');
	}

	public function register(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:8',
		]);

		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);

		$user->save();

		Auth::login($user);

		return redirect()->route('user.profile');

	}

	public function logout()
	{
		Auth::logout();
		return redirect()->route('user.login');
	}
}
