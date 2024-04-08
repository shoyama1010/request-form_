<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorControlle extends Controller
{
	//    　　　// データ一覧ページの表示
	public function index()
	{
		$authors = Author::all();
		// dd($authors);
		return view('index', ['authors' => $authors]);
	}

	// データ追加用ページの表示
	// public function add()
	public function find()
	{
		// return view('add');
		return view('find', ['input' => '']);
	}

	// データ追加機能
	public function create(Request $request)
	{
		$form = $request->all();
		Author::create($form);
		return redirect('/');
	}

	// 追記：ここから
	// データ編集ページの表示
	public function edit(Request $request)
	{
		$author = Author::find($request->id);
		return view('edit', ['form' => $author]);
	}
	// 追記：ここまで
}
