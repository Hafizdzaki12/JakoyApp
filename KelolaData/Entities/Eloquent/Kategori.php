<?php 

namespace Jakoy\KelolaData\Entities\Eloquent;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {

	protected $table = "kategori";
	protected $guarded = ['id'];
	public $timestamps = false;

	public function konten(){
		return $this->hasMany("Jakoy\KelolaData\Entities\Eloquent\Konten", 'kategori_id');
	}

}
