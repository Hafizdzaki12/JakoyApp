<?php 
namespace Jakoy\KelolaData\Entities\Eloquent;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model {

	protected $table = "konten";
	protected $guard = ['id'];
	public $timestamps = false;
	protected $fillable = ['nama', 'kategori_id', 'gambar', 'deskripsi']; 

	public function kategori(){
		return $this->belongsTo("Jakoy\KelolaData\Entities\Eloquent\Kategori", "kategori_id");
	}
}
