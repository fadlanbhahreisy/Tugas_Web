<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('front');
	}
	public function page()
	{
		return view('barang/barang');
	}

	//--------------------------------------------------------------------

}
