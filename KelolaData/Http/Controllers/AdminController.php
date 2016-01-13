<?php namespace Jakoy\KelolaData\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Jakoy\KelolaData\Entities\Eloquent\User;
use Jakoy\KelolaData\Entities\Eloquent\Profil;
use Jakoy\KelolaData\Entities\Eloquent\Konten;

class AdminController extends Controller {

	public function __construct() {

		$this->middleware('auth', ['only' => 'index']);

	}

	public function index() {
		if(Auth::user()->level == 1) {
			return view('KelolaData::index',compact('data'));
		} else {
			$data = Konten::all();
			return view('KelolaData::user',compact('data'));
		}
	}

	public function masuk() {
		return view('KelolaData::masuk',compact('data'));
	}

	public function proses(Request $request) {
		$this->validate($request, [
			'username' => 'required',
			'password' => 'required',
		]);

		if (Auth::attempt($request->except('_token'))) {
			return redirect(route('beranda'));
		}

		
		return redirect()->back()->withPesan('Username dan password salah!');
	}

	public function keluar() {
		Auth::logout();
		Session::flush();
		return redirect(route('masuk'));
	}

	public function daftar() {
		return view('KelolaData::daftar',compact('data'));
	}

	public function register(Request $request) {
		$this->validate($request, [
			'username' => 'required|unique:user,username',
			'password' => 'required',
			'nama' => 'required',
			'alamat' => 'required'
		]);

		$data = User::create([
					'username' => $request->username,
					'password' => bcrypt($request->password),
					'level' => 0
				]);

		Profil::create([
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'user_id' => $data->id
		]);

		return redirect()->back()->withPesan('berhasil');
	}

}