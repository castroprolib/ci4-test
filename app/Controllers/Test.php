<?php namespace App\Controllers;

class Test extends BaseController
{
	public function index()
	{
		return view('test');
	}

	public function algo()
	{
		// echo view('test');

		// echo "hola mundo";

		echo base_url();

		// echo $baseURL;
	}

	public function dale($id)
	{		

		echo $id;
		
	}




	

}
