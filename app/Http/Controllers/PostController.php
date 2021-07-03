<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return \response($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		echo fuck;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $post = Post::where('id',(int)$request->get('id'))->first();

	    $mode = $request->get('mode');
	    $type = $request->get('type');
	    $method = $request->get('method');

	    switch ($method) {
		    case 'create':
		    	$this->createPost();
		    	break;
	    }


	    if ($type === 'like')
	    {
		    if ($mode === 'up')
		    {
			    $post->increment('like');
		    }
		    elseif ($mode === 'down')
		    {
			    $post->decrement('like');
		    }
	    }
	    elseif ($type === 'dislike')
	    {
		    if ($mode === 'up')
		    {
			    $post->increment('dislike');
		    }
		    elseif ($mode === 'down')
		    {
			    $post->decrement('dislike');
		    }
	    }
	    elseif ($type === 'text')
	    {
		    $post->content = $request->get('postContent');
		    $post->save();
	    }

	    return \response('ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return \response($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		echo 'fuck';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	    $method = $request->getMethod();
	    if (mb_strtoupper($method) === 'PUT')
	    {
	    	$post = new Post();
	    	$post->content = $request->get('postContent');
	    	$post->like = 0;
	    	$post->dislike = 0;
	    	$post->user_id = 1;
	    	$post->save();
	    }
	    elseif (mb_strtoupper($method) === 'PATCH')
	    {

	    }

	    return \response('good');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isSuccess = Post::where('id', $id);
        return \response($isSuccess);
    }

	private function createPost(Request $request)
	{
		$post = new Post();
		$post->content = $request->get('postContent');
		$post->room_id = $request->get('room_id');
		$post->user_id = $request->get('user_id');
		$post->column_type = $request->get('postType');
		$post->save();
	}

	public function reaction(Request $request, $id, $reaction)
	{
		$post = Post::find($id)->first();
		if (!in_array($reaction, ['like', 'dislike'], true))
		{
			return;
		}
		$post->increment($reaction);
	}
}
