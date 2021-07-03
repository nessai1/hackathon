<?php

namespace App\Http\Controllers;

use App\Events\Like;
use App\Models\Post;
use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use Illuminate\Http\Request;

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
	    $post = new Post();
	    $post->content = $request->get('postContent');
	    $post->room_id = $request->get('room_id');
	    $post->user_id = 1;
	    $post->like = 0;
	    $post->dislike = 0;
	    $post->column_type = $request->get('postType');
	    $post->save();
//	    $post = Post::where('id',(int)$request->get('id'))->first();

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

	public function reaction($id, $reaction)
	{
		$post = Post::where('id', $id)->first();
		if (!in_array($reaction, ['like', 'dislike'], true))
		{
			return;
		}
		$post->increment($reaction);
		$options = array(
			'cluster' => 'eu',
			'useTLS' => false
		);
		event(new Like('like'));
	}
}
