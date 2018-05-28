<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth')->except('index', 'show');
    }


    public function index()
    {
        //

        $posts=Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

      /*   $posts=Post::latest();
 
        if ($month=request('month')){

            $posts->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if ($year=request('year')){
            
            $posts->whereYear('created_at',$year);
         }

         $posts=$posts->get(); */


        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

        $this->validate(request(),
        [
            'title'=>'required',  
            'body'=>'required'
        ]);

        // $post=new Post;


        // $post->title=request('title');

        // $post->body=request('body');

        // $post->save();



         //ili

    /*     Post::create([

                'title'=>request('title'),
                'body'=>request('body'),
                'user_id'=>auth()->id()


        ]); */

        auth()->user()->publish(

            new Post(request(['title', 'body']))

        );

         return redirect('/');
         

         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
           return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
