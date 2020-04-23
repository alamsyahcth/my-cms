<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $data = Post::all();
        return view('backend.posts.index', compact('data'));
    }

    public function create()
    {
        $data = Category::all();
        return view('backend.posts.add', compact('data'));
    }

    public function store(Request $request)
    {
        $validation = $this->validate($request, [
            'title' => 'required|unique:posts,title',
            'category_id' => 'required',
            'content' => 'required'
        ]);
        
        if ($validation) 
        {
            $db = new Post;
            $db->title = $request->title;
            $db->slug = str_slug($request->title);
            $db->content = $request->content;
            $db->category_id = $request->category_id;

            if($db->save())
            {
                return redirect('/posts')->with('success','Your data was created');
            }
            else
            {
                return redirect('/posts')->with('failed','Your data not created');
            }
        }
    }

    public function show($id)
    {
        
    }

    public function edit($slug)
    {
        $data = Post::where('slug', $slug)->first();
        $data2 = Category::all();
        return view('backend.posts.edit', compact(['data','data2']));
    }

    public function update(Request $request, $id)
    {
        $validation = $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);

        if ($validation)
        {
            $db = Post::find($id);
            $db->title = $request->title;
            $db->slug = str_slug($request->title);
            $db->content = $request->content;
            $db->category_id = $request->category_id;

            if($db->save())
            {
                return redirect('/posts')->with('success','Your data was updated');
            }
            else
            {
                return redirect('/posts')->with('failed','Your data not updated');
            }
        }
    }

    public function destroy($id)
    {
        if (Post::where('id', $id)->delete())
        {
            return redirect('/posts')->with('success','Your data was deleted');
        }
        else
        {
            return redirect('/posts')->with('failed','Your data not deleted');
        }
        
    }
}
