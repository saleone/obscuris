<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\User;
use Auth;

class PostsController extends Controller
{
    /**
     * Contructor
     */
    public function __construct() {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {
        Post::create($request->all());
        flash("Post saved!");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('/posts');
    }

    /**
     * Show the edit form.
     *
     * @param int $id
     * @return \Illuminate\Http\Reponse
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if (!$post) abort(404);
        return view('posts.edit')->with('post', Post::find($id));
    }

    /**
     * Persist update changes.
     * @param int $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $req)
    {
        $this->validate($req, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $post = Post::find($id);
        $post->title = $req->title;
        $post->content = $req->content;
        $post->save();
        flash("Post updated!");
        return redirect()->back();
    }
}
