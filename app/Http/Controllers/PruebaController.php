<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller{
	/**
	@return Response
	
*/
	public function index()
	{
		return "hola desde controller!!!!";
	}

	public function nombre($nombre)
	{
		return "hola mi nombre es " .$nombre ."el coxino";
		
	}

}