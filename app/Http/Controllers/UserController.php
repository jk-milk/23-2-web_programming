<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function test() : View {
		return view('welcome');
	}

	public function create() : View {
		return view('register_form');
	}

	public function store(Request $req) : View {
		$name = $req->name;
		$birthDate = $req->birthDate;
		$email = $req->email;
		$organization = $req->organization;
		return view('register', ['name'=>$name, 'birthDate'=>$birthDate, 'email'=>$email, 'organization'=>$organization]);
	}

	public function edit() : View {
		return view('update_form');
	}

	public function update(Request $req) : View {
		$name = $req->name;
		$birthDate = $req->birthDate;
		$email = $req->email;
		$organization = $req->organization;
		return view('update', ['name'=>$name, 'birthDate'=>$birthDate, 'email'=>$email, 'organization'=>$organization]);
	}

	public function index() : View {
		return view('list');
	}

	public function destroy(Request $req) : View {
		$name = $req->name;
		return view('remove', ['name'=>$name]);
	}
}
