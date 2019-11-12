<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Mapper;
use Input;
use Redriect;
use Session;

class Controller extends BaseController
{
    	public function index(){
    	Mapper::map(5.5015289,-73.3356685);
    	return view('mapa');
	}
}
