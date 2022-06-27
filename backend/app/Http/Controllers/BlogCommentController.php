<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlog_CommentRequest;
use App\Http\Requests\UpdateBlog_CommentRequest;
use App\Models\Blog_Comment;

class BlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBlog_CommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlog_CommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog_Comment  $blog_Comment
     * @return \Illuminate\Http\Response
     */
    public function show(Blog_Comment $blog_Comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog_Comment  $blog_Comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog_Comment $blog_Comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlog_CommentRequest  $request
     * @param  \App\Models\Blog_Comment  $blog_Comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlog_CommentRequest $request, Blog_Comment $blog_Comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog_Comment  $blog_Comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog_Comment $blog_Comment)
    {
        //
    }
}
