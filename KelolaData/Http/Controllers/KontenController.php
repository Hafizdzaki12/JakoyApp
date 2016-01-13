<?php namespace Jakoy\KelolaData\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Jakoy\KelolaData\Entities\Eloquent\Konten;
use File;
use Input;
use Illuminate\Http\Request;

class KontenController extends Controller {

	public function __construct(Konten $data) {
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

		return view('KelolaData::konten.index',compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		    return view('KelolaData::konten.buat');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
	    $this->validate($request, [
	        'nama' => 'required',
	        'kategori_id' => 'required',
	        'gambar' => 'required|mimes:jpg,png,jpeg',
	        'deskripsi' => 'required'

	    ]);

	    $data = $request->all();

	    # Logika upload
	    if($request->hasFile('gambar')) {
	        $direktori = public_path() . '/upload/';
	        $file = Input::file('gambar');
	        $nama_file = str_random(20) . '.' . $file->getClientOriginalExtension();
	        $data['gambar'] = $nama_file;
	        $file->move($direktori, $nama_file);
	    }

	    $this->data->create($data);

	    return redirect(route('konten.index'))->withPesan('Data berhasil ditambahkan.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		return view('KelolaData::konten.ubah', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$this->validate($request, [
	        'nama' => 'required',
	        'kategori_id' => 'required',
	        'gambar' => 'mimes:jpg,png,jpeg',
	        'deskripsi' => 'required'
	    ]);

	    $data = $request->all();

	    # Logika upload
	    if($request->hasFile('gambar')) {
	    	$direktori = public_path() . '/upload/';
	    	// Hapus gambar lama
	    	if(File::exists($direktori . $this->data->find($id)->gambar)) {
	    		File::delete($direktori . $this->data->find($id)->gambar);
	    	}
	    	$file = Input::file('gambar');
	    	$nama_file = str_random(20) . '.' . $file->getClientOriginalExtension();
	    	$data['gambar'] = $nama_file;
	    	$file->move($direktori, $nama_file);
	    } else {
	    	$data['gambar'] = $this->data->find($id)->gambar;
	    }

	    $this->data->find($id)->update($data);

	    return redirect(route('konten.index'))->withPesan('Data berhasil diubah.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// $direktori = public_path() . '/upload/';
  //   	// Hapus gambar lama
  //   	if(File::exists($direktori . $this->data->find($id)->gambar)) {
  //   		File::delete($direktori . $this->data->find($id)->gambar);
  //   	}
		$this->data->destroy($id);
	    return redirect(route('konten.index'))->withPesan('Data berhasil dihapus.');
	}

}
