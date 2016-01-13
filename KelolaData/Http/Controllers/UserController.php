<?php namespace Jakoy\KelolaData\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Jakoy\KelolaData\Entities\Eloquent\User;
use Jakoy\KelolaData\Entities\Eloquent\Profil;
use File;
use Illuminate\Http\Request;

class UserController extends Controller 
{
	  public function __construct(User $data) {
	      $this->data = $data;
	  }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = $this->data->all();
		return $data;
		// return view('KelolaData::user.index',compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
		    // $file=$this->data;
		    // return view('KelolaData::form',array(
		    // 	'url'=>('kategori.store')
		    // 	),compact('file'));
		return view('KelolaData::user.buat');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$this->validate($request, [
		    'username' => 'required|unique:user,username',
		    'password' => 'required',
		    'nama' => 'required',
		    'alamat' => 'required'
		]);

		$this->data->create($request->all());

		return redirect(route('user.index'))->withPesan('Berhasil.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	    $data = $this->data->findOrFail($id);
	    return view('KelolaData::user.ubah', compact('data'));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
	    $this->validate($request, [
		    'username' => 'required|unique:user,username,'.$id,
		    'password' => 'required',
		    'nama' => 'required',
		    'alamat' => 'required'
	    ]);
	    $data = $request->all();

	    $this->data->findOrFail($id)->update($request->all());

	    return redirect(route('user.index'))->withPesan('Data berhasil dirubah');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->data->destroy($id);

		return redirect()->back()->withPesan('Data berhasil dihapus!');
	}

}
