<?php 

namespace App;

use illuminate\Database\Eloquent\Model;

/**
* 
*/
class Siswa extends Model
{	
	public $table = 't_siswa';

	protected $fillable = [
		'nis', 'nama_lengkap', 'jenis_kelamin', 'alamat'
	];
}