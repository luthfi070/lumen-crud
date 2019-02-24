<?php

namespace App\http\Controllers;

use illuminate\Http\Request;
use illuminate\Support\Facades\Validator;

/**
* 
*/
class SiswaController extends Controller
{
	public function create(Request $request)
	{
		$validation = Validator::make($request->all(), [
		'nis' => 'required|max:10',
		'nama_lengkap' => 'required|string',
		'jenis_kelamin' => 'required|max:1',
		'alamat' => 'required|string',
		]);
		
		if ($validation->fails()){
			$errors = $validation->errors();
			return [
				'status' => 'error',
				'message' => $errors,
				'result' => null
			];
		}

		$result = \App\Siswa::create($request->all());
		if ($result) {
			return [
				'status' => 'success',
				'message' => 'Data Berhasil Ditambahkan',
				'result' => $result
			];
		}else{
			return [
				'status' => 'errors',
				'message' => 'Data Gagal Ditambahkan',
				'result' => null
			];
		}
	}

	public function read(Request $request){
		$result = \App\Siswa::all();
		return [
			'status' => 'success',
			'message' => '',
			'result' => $result
		];
	}

	public function update(Request $request, $id){
		$validation = Validator::make($request->all(), [
			'nis' => 'required|max:10',
			'nama_lengkap' => 'required|string',
			'jenis_kelamin' => 'required|max:1',
			'alamat' => 'required|string',
			]);

		if ($validation->fails()) {
			$errors = $validation->errors();
			return [
			'status' => 'error',
			'message' => '$errors',
			'result' => null
			];
		}

		$siswa = \App\Siswa::find($id);
		if(empty($siswa)) {
			return[
				'status' => 'error',
				'message' => 'Data tidak ditemukan',
				'status' => null
			];
		}

		$result = $siswa->update($request->all());
		if ($result){
			return[
				'status' => 'success',
				'message' => 'Data Berhasil Diubah',
				'result' => $result
			];
		}else{
			return[
			'status' => 'error',
				'message' => 'Data gagal Diubah',
				'status' => null
			];
		}
	}

	public function delete(Request $request, $id)
	{
		$siswa = \App\Siswa::find($id);
		if(empty($siswa)){
			return [
				'status' => 'error',
				'message' => 'Data gagal Diubah',
				'status' => null
			];
		}
	

	$result = $siswa->delete($id);
	if($result){
		return[
				'status' => 'success',
				'message' => 'Data Berhasil Dihapus',
				'status' => $result
				];
	}else{
		return[
				'status' => 'error',
				'message' => 'Data Gagal Dihapus',
				'status' => null
		];
	}
}
}
?>