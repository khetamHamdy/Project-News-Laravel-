<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->toArray());

        $Post = Post::Join(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->where('parents.NameCategory', '=', 'Business')
            ->OrderBy('updated_at', 'desc')
            ->get();

        $serach = $request->search;
        $post_serach = Post::Join(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->where('title', $serach)
            ->orWhere('descerption', 'like', '%' . $serach . '%')
            ->orWhere('parents.NameCategory', 'like', '%' . $serach . '%')
            ->paginate(4);
        //  dd($Post);
        return view('Users_FrontEnd.search', compact('post_serach', 'serach', 'Post'));
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
        //
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
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
