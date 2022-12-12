<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }
    public function gerar(){
		User::create(array(
			'name' => 'admin',
			'email' => 'dashboard@neway.com',
			'password' => (Hash::make('neway@2022')),
			'type' => 0,
		));
	}
}
