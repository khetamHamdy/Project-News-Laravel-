<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts=Post::OrderBy('updated_at' ,'desc')->paginate(14);
      
        $posts = Post::leftJoin(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->OrderBy('updated_at' ,'desc')
        ->paginate();
       // dd($category->toArray());
        return view('admin.Posts.post' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.Posts.add-post' , compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:50|min:3|unique:posts',  
            'Description' =>'required|min:4',
            'author' => 'required|min:3',
            'category_id' =>'integer',
            'fileToUpload' => 'required',
        ];
        $messages = [
            'title.required' => ' The Title Required inputed ......',
        ];
        $Validator = Validator::make($request->all(), $rules, $messages);
        if ($Validator->fails()) {
            return redirect()->back()->withErrors($Validator->errors())->withInput();
        }

        $post= new Post();
        $post->title = $request->title;
        $post->descerption = $request->Description; 
        $post->author =$request->author;
        $post->category_id =$request->category;

        $post_image = $request->fileToUpload;
        $file_name = $post->title . time() . '.' . $post_image->extension();
        $post_image->move('post_images', $file_name);
        $post->image = $file_name;
    
        $post->save();

        return redirect()->route('post.index')->with('success','The Post Added Successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $category=Category::all();
        return view('admin.Posts.update-post' ,compact('post' ,'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->descerption = $request->Description; 
        $post->author =$request->author;
        $post->category_id =$request->category;

        $post_image = $request->fileToUpload;
        $file_name = $post->title . time() . '.' . $post_image->extension();
        $post_image->move('post_images', $file_name);
        $post->image = $file_name;
    
        $post->save();

        return redirect()->route('post.index')->with('update','The Post Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('delete', 'deleted successfully');
    }
}
