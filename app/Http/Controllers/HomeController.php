<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$nombre = 'Fer';

    	return view('index')
    	->with('nombre', $nombre);
    }

    public function detalle(){
    	$nombre = 'Fer';
    	$apellido = 'Díaz';
    	$tel = '352 100 4223';
    	$email = 'ferodiso@gmail.com';

    	return view('detalle')
    	->with('nombre', $nombre)
    	->with('apellido', $apellido)
    	->with('tel', $tel)
    	->with('email', $email);
    }
}
