<?php

namespace App\Http\Controllers;

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
        $posts = [
                ['id' => 1, 'title' => 'Laravel', 'description' => 'This Is description', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'],
                ['id' => 2, 'title' => 'JS', 'description' => 'This Is description', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-25'],
            ];

        return view('posts.index', [
                'posts' => $posts,
            ]);
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
    public function store(Request $request)
    {
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'This Is description', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'];

        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'This Is description', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'];

        return view('posts.edit', ['post' => $post]);
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
        //
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('posts.index');
    }
}
