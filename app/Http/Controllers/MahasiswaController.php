<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
	/*function getIndex(){
		$data=DB::table('mahasiswa')
		->where(['jenis_kelamin'=>'l']);
	}*/

	
	function getTambah(){
		return view('mahasiswa_tambah');
	}
	function postTambah(request $request){
		DB::table('mahasiswa')->insert([
			'nama'=>$request->input('nama'),
			'jenis_kelamin'=>$request->input('jenis_kelamin'),
			'jurusan'=>$request->input('jurusan')
			]);
		return redirect()->route('mahasiswa');
	}
	function postHapus(request $request){
		DB::table('mahasiswa')
		->where('id', $request->input('id'))
		->delete();
		return redirect()->route('mahasiswa');
	}
	function getIndex() {
		$data = DB::table('mahasiswa')->get();
		$jeniskelamin=['L'=>'laki','P'=>'Perempuan'];

		$jurusan=['SI'=>'Sistem Informatika','MI'=>'Manajemen',
		'EN'=>'English'];
		return view('mahasiswa', [
			'list'=>$data,
			'jeniskelamin'=>$jeniskelamin,
			'jurusan'=>$jurusan
			]);
	}
	function getUbah(request $request){
		$mahasiswa=DB::table('mahasiswa')
		->where('id',$request->query('id'))
		->first();
	
		return view('mahasiswa_ubah', ['data'=>$mahasiswa]);
	}
	function postUbah(request $request){
		DB::table('mahasiswa')
		->where('id',$request->input('id'))
		->update([
			'nama'=>$request->input('nama'),
			'jenis_kelamin'=>$request->input('jenis_kelamin'),
			'jurusan'=>$request->input('jurusan')
			]);
		return redirect()->route('mahasiswa');
	}

}