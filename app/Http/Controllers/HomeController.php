<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/*function getIndex(){
		return "<h1>Halo halo bandung </h1>";
	}*/
	function getIndex(){
		$angka=2;
		$angka2=5;
		$hasilkali= $angka * $angka2;

		return view ('home', ['hasil'=> $hasilkali]);
	}
	
}