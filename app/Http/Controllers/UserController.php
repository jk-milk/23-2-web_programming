<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		// 리스트 보기
		/*
			1. DB에서 사용자 정보를 가져온다.
			2. 가져온 사용자 정보를 blade 파일에 넘겨주면서 실행한다.
		*/
		// DB에서 읽어온 정보를 $users 변수에 할당했다고 가정.
		$users = [['id'=>1, 'name'=>'고길동', 'birthDate'=>'1999/01/02', 'email'=>'gdgo@gmail.com'],
							['id'=>2, 'name'=>'홍길동', 'birthDate'=>'1998/01/02', 'email'=>'gdh@gmail.com'], 
							['id'=>3, 'name'=>'박동훈', 'birthDate'=>'1599/05/02', 'email'=>'dhp@gmail.com'], 
							['id'=>4, 'name'=>'박찬호', 'birthDate'=>'1699/02/02', 'email'=>'chp@gmail.com'], 
							['id'=>5, 'name'=>'박문수', 'birthDate'=>'1990/07/02', 'email'=>'msp@gmail.com'],
						]; 
		return view('welcome', ['users'=>$users]);
		
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		// 등록 폼
		return view('register_form');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		// 등록하기
		/* 
			1. Request 객체로부터 사용자가 폼에 입력한 값을 꺼낸다.
			2. 1에서 꺼낸 값을 DB에 넣는다.
			3. 등록결과를 페이지를 만들어서 반환한다.
		*/
		$name 			= $request->input("name");
		$birthDate 	= $request->input("birthDate");
		$email 			= $request->input("email");
		$org 				= $request->input("org");

		return view('register', ['name'=>$name, 'birthDate'=>$birthDate, 'email'=>$email, 'org'=>$org]);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		// 상세 보기
		/*
			1. $id를 가지고 DB에서 레코드 하나를 인출한다.
			2. 인출된 그 정보를 변수 $user에 할당
			3. 그 $user 값의 blade에 전달하면서 실행. 
		*/
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		// 수정 폼
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		// 수정하기
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		// 삭제하기
	}
}
