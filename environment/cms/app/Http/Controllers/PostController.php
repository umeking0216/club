<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Validator;  //この1行だけ追加！

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'asc')->paginate(3);
        return view('posts', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

	  $images = $request->file('images');
	  $path = null;
        // dd($image);
        // 画像がアップロードされていれば、storageに保存
	  if($request->hasFile('images')){
            $path = \Storage::put('/public', $images);
            $path = explode('/', $path);
        } 
	  
	  
	  
	  $posts = new Post;
	  $posts->title = $request->title;
	  $posts->body = $request->body;
	  $posts->images = $path ? $path[1] : null;
	  $posts->save(); 
	  return redirect('/');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //{books}id 値を取得 => Book $books id 値の1レコード取得
        return view('postsedit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $images = $request->file('images');
        $path = null;  // 変数を宣言し、初期化
    if ($request->hasFile('images')) {
        $path = \Storage::put('/public', $images);
        $path = explode('/', $path);
    
     }
        //バリデーション
        //  $validator = Validator::make($request->all(), [
        //      'id' => 'required',
        //      'item_name' => 'required|min:3|max:255',
        //      'item_number' => 'required|min:1|max:3',
        //      'item_amount' => 'required|max:6',
        //      'published' => 'required',
        // ]);
        //バリデーション:エラー
        //  if ($validator->fails()) {
        //      return redirect('/postsedit/'.$request->id)
        //          ->withInput()
        //          ->withErrors($validator);
        // }
        
        //データ更新
        // $posts = Post::find($request->id);
        
        $post = Post::find($request->id);
if (!$post) {
    abort(404); // もし$postがnullなら、404エラーを返す
}

        $post->title = $request->title;
	    $post->body = $request->body;
	    $post->images = $path ? $path[1] : null;
        $post->save();
        return redirect('/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       $post->delete();       //追加
       return redirect('/');  //追加
    }
}
