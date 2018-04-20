<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

	public function index() {
		return Post::all();
	}

	public function show(Post $post) {
		return $post;
	}

	public function store(Request $req) {
		$post = Post::create($req->all());

		return response()->json($post, 201);
	}

	public function update(Request $req, Post $post) {
		$post->update($req->all(();

		return response()->json($post, 200);
	}

	public function delete(Post $post) {
		$post->delete();

		return response()->json(null, 204);
	}

}
