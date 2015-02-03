<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		// $posts = Post::all();
		$posts = Post::paginate(3);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return View::make('posts.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$post = new Post();
		return $this->savePost($post);


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			$post = Post::findOrFail($id);

		} catch (Exception $e) {
			Log::info("User tried to request this id: " . $id );
			App::abort(404);
		}

		return View::make('posts.show')->with('post', $post);
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		return $this->savePost($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	protected function savePost($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Failed to save your post!');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {

    	$post->title = Input::get('title');
    	$post->body  = Input::get('body');

    	$post->save();
    	Session::flash('successMessage', 'Your post was saved!');
    	return Redirect::action('PostsController@index');
    	}
	}


}
