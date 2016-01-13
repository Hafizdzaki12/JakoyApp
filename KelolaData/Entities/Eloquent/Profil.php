<?php 

namespace Jakoy\KelolaData\Entities\Eloquent;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model {

	protected $table = "profil";
	protected $guarded = ['id'];
	protected $fillable = ['user_id', 'nama', 'alamat'];
	public $timestamps = false;

	public function user(){
		return $this->hasMany("Jakoy\KelolaData\Entities\Eloquent\User", 'user_id');
	}

}
