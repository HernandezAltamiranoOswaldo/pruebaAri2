<?php
	namespace App\Http\Controllers\Controlador; //se decalra el controlador


	use App\Http\Controllers\Controller;


	use Illuminate\Http\Request;


	/**
	 *
	 */
	class controlador1 extends Controller
	{
//practica 1
		public function ver_hola()
		{
			return view('Vistas1/hola');
			# code...
		}



}
?>
