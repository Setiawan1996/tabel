<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    	// $kirim['nama'] = 'Setiawan';
    	$kirim['alamat'] = 'Medan';
    	$kirim['umur'] = '27 tahun';
        return view('baru',array('data'=>$kirim);
    }
}
