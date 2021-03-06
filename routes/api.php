<?php

Use App\Post;

Route::get('posts', function() {
	return Post::all();
});

Route::get('posts/{id}', function($id) {
	return Post::find($id);
});

Route::post('posts', function(Request $req) {
	return Post::create($req->all);
});

Route::put('posts/{id}', function(Request $req, $id) {
	$post = Post::findOrFail($id);
	$post->update($req->all());

	return $post;
});

Route::delete('posts/{id}', function($id) {
	Post::find($id)->delete();

	return 204;
});



use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
