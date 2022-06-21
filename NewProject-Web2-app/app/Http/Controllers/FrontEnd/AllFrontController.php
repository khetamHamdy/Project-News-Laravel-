<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class AllFrontController extends Controller
{

    public function index_author()
    {
        /*        $Categorie = category::leftJoin(
            'categories as parents',  table one
            'parents.id',
            '=',
            'categories.parent_id', table two
        )->select([
            'categories.*',
            'parents.name as parent_name',
        ])->paginate(); */

  
        $Post = Post::leftJoin(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->paginate();
      //dd( $Categorie);
        return view('Users_FrontEnd.author');
    }

    public function index_Business()
    {
  
        $Post = Post::Join(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->where('parents.NameCategory', '=', 'Business')
        ->OrderBy('updated_at' ,'desc')
        ->paginate(3);
    //   dd( $Categorie->toArray());
        return view('Users_FrontEnd.Business' ,compact('Post'));
    }

    public function index_Entertainment()
    {
  
        $Post = Post::Join(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->where('parents.NameCategory', '=', 'Entertainment')
        ->OrderBy('updated_at' ,'desc')
        ->paginate(3);

        return view('Users_FrontEnd.Entertainment' , compact('Post' ));
    }

    public function index_Politics()
    {
  
        $Post = Post::Join(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->where('parents.NameCategory', '=', 'Politics')
        ->OrderBy('updated_at' ,'desc')
        ->paginate(3);
        return view('Users_FrontEnd.Politics' , compact('Post'));
    }

    public function index_Sports()
    {
        $Post = Post::Join(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->where('parents.NameCategory', '=', 'Sports')
        ->OrderBy('updated_at' ,'desc')
        ->paginate(3);
        return view('Users_FrontEnd.Sports' , compact('Post'));
    }
    public function index_single($id)
    {
      
      //  $posts = Post::all()->where('id' , '=' ,$id);

        $Post = Post::Join(
            'categories as parents',
            'parents.id',
            '=',
            'posts.category_id',
        )->select([
            'posts.*',
            'parents.NameCategory as parent_name',
        ])->where('posts.id', '=', $id)
        ->paginate();
       //dd($posts->toArray());
        return view('Users_FrontEnd.single' , compact('Post'));
    }
   

}
