<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rule;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request){
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required',
    	]);//digunakan untuk validasi login

    	$user = User::where('email', '=', $request->email)->first();
    	$status = "error";
    	$message = "";
    	$data = null;
    	$code = 401;

        //jika hashing dari password yang diinput user sama dengan password maka generate token lalu tampilkan data user menggunakan method toArray()
    	if ($user) {
    		if (Hash::check($request->password, $user->password)){
    			$user->generateToken();
    			$status = 'success';
    			$message = 'Login Berhasil';

    			$data = $user->toArray();
    			$code = 200;
    		}else{
    			$message = "Login gagal, password yang anda masukkan salah";
    		}
    	}else{
    		$message = "Login gagal, username yang anda masukkan salah";
    	}

    	return response()->json([
    		'status' => $status,
    		'message' => $message,
    		'data' => $data
    	], $code);
    }

    public function register(Request $request){
        //validasi untuk register
		$Validator = Validator::make($request->all(),[
			'name' => 'required|string|max:255|unique:users',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6',
            'phone' => 'required|string|max:13',
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

		]);

		$status = "error";
		$message = "";
		$data = null;
		$code = 400;
        //jika validasi gagal tampilkan errornya
		if ($Validator->fails()) {
				$errors = $Validator->errors();
				$message = $errors;  	  	
		}else{//jika tidak buat user sesuai validasi diatas.
			$user = \App\User::create([
				'name' => $request->name,
				'email' => $request->email,
				'password' => Hash::make($request->password),//hashing password yang diinput ke database,
                'phone' => $request->phone,
                'avatar' => $request->avatar->getClientOriginalName(),//dapatkan nama dari image yang diuploud,
                'avatar' => $request->avatar->store('avatar', 'public'),//avatar yang diuploud tempatkan pada direktori /public/avatar tepatnya pada storage/app/public/avatar/ konfigurasi soal storage link ada pada direktori config/filesystems.conf
				'roles' => json_encode('CUSTOMER'),//user yang dibuat rolenya adalah sebagai customer
			]);
            //jika user sudah success di register generate token dan tampilkan data user dengan fungsi toArray()
			if ($user) {
				$user->generateToken();
				$status = "success";
				$message = "register berhasil";
				$data = $user->toArray();
				$code = 200;
			}else{
				$message = "register gagal";
			}
		}

		return  response()->json([
			'status' => $status,
			'message' => $message,
			'data' => $data
		], $code);
	}

    public function logout(Request $request){
    	//user yang sudah login
    	$user = Auth::user();
        //jika logout ubah api_token yang sudah digenerate ketika login menjadi null lalu simpan.
    	if($user){
    		$user->api_token = null;
    		$user->save();
    	}
        //tampilkan pesan logout berhasil dengan http response 200
    	return response()->json([
    		'status' => 'success',
			'message' => 'logout berhasil',
			'data' => null
    	], 200);
    }
    
    //function update ini masih saya kembangkan karena masih terdapat bug yang belum terselesaikan, saya sduah tanya ke grub2 dan komunitas laravel, dan stackoverflow dan masih belum ketemo pemecahannya.
    public function update(Request $request, $id){

        $Validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|max:13',
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $status = "error";
        $message = "";
        $data = null;
        $code = 400;
        if ($Validator->fails()) {
                $errors = $Validator->errors();
                $message = $errors;         
        }else{
            $user = \App\User::whereId($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'avatar' => $request->avatar->getClientOriginalName(),
                'avatar' => $request->avatar->store('avatar', 'public'),
            ]);
            if ($user) {
                $status = "success";
                $message = "update berhasil";
                $data = $user->toArray();
                $code = 200;
            }else{
                $message = "update gagal";
            }
        }

        return  response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}