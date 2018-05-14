<?php
use Illuminate\Http\Request;
Route::get('/', function () {
    $result = App\Category::all();
    return view('welcome', ['key'=>$result]);
});
Route::get('/posts/{id}', function ($id) {
    $links=App\Category::all();
    $result = App\Post::where('id_category', $id)->get();
    return view('posts', ['key'=>$links,'posts'=>$result]);
});
Route::get('/post/{id}', function ($id) {
    $links=App\Category::all();
    $result = App\Post::where('id', $id)->get();
    return view('post', ['key'=>$links,'posts'=>$result]);
});
Route::post('/coment/', function (Request $req) {
    echo $req->name;
    echo $req->text;
    
});
