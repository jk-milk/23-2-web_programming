<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/test', function(){
	return view('welcome');
}); // 클로저

Route::get('/register', function(){
	return view('register_form');
});

Route::post('/register', function(Request $req){
	// $email = $req->input("email"); $email = $req->email;
	$name = $req->input("name");
	$email = $req->input("email");
	$birthDate = $req->input("birthDate");
	$organization = $req->input("organization");
	return view('register', ['name'=>$name, 'email'=>$email, 'birthDate'=>$birthDate, 'organization'=>$organization]);
});

Route::get('/update', function(){
	return view('update_form');
});

Route::put('/update', function(Request $req){
	$name = $req->input("name");
	$email = $req->input("email");
	$birthDate = $req->input("birthDate");
	$organization = $req->input("organization");
	return view('update', ['name'=>$name, 'email'=>$email, 'birthDate'=>$birthDate, 'organization'=>$organization]);
});

Route::get('/remove', function(){
	return view('remove_form');
});

Route::delete('/remove', function(Request $req){
	$name = $req->input("name");
	return view('remove', ['name'=>$name]);
});

Route::get('/user/{id?}', function(string $id = '100'){
	return 'User '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function(string $postId, string $commentId) {
	return '게시글 '.$postId.'번 글의 댓글 '.$commentId.'번을 인출했습니다.';
});