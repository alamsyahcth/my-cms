<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use File;

class CategoryController extends Controller
{
   public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $data = Category::get();
        return view('backend.category.index', compact('data'));
    }

    public function create()
    {
        return view('backend.category.add');
    }

    public function store(Request $request)
    {
        $validation = $this->validate($request, [
            'name' => 'required|unique:categories,name',
            'description' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($validation)
        {
            $file = $request->file('image');
            $image_name = time()."_".$file->getClientOriginalName();
            $to = 'images/category';
            $file->move($to, $image_name);

            $db = new Category;
            $db->name = $request->name;
            $db->slug = str_slug($request->name);
            $db->description = $request->description;
            $db->image = $image_name;

            if($db->save())
            {
                return redirect('/category')->with('success','Your data was updated');
            }
            else
            {
                return redirect('/category')->with('failed','Your data not updated');
            }
        }
    }

    public function show($id)
    {
        
    }

    public function edit($slug)
    {
        $data = Category::where('slug', $slug)->first();
        return view('backend.category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        if ($request->image != '')
        {
            $validation = $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
                'image' => 'required|file|image|mimes:jpeg,png,jpg',
            ]);
            
            if ($validation) 
            {
                $file = $request->file('image');
                $image_name = time()."_".$file->getClientOriginalName();
                $to = 'images/category';
                $file->move($to, $image_name);

                File::delete(base_path().'/public/images/category/'.$request->image_old);

                $db = Category::find($id);
                $db->name = $request->name;
                $db->slug = str_slug($request->name);
                $db->description = $request->description;
                $db->image = $image_name;

                if($db->save())
                {
                    return redirect('/category')->with('success','Your data was created');
                }
                else
                {
                    return redirect('/category')->with('failed','Your data not created');
                }
            }
        }
        else 
        {
            $validation = $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
            ]);
            
            if ($validation) 
            {
                $db = Category::find($id);
                $db->name = $request->name;
                $db->slug = str_slug($request->name);
                $db->description = $request->description;
                $db->image = $request->image_old;

                if($db->save())
                {
                    return redirect('/category')->with('success','Your data was created');
                }
                else
                {
                    return redirect('/category')->with('failed','Your data not created');
                }
            }
        }
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        File::delete(base_path().'/public/images/category/'.$data->image);
        
        if (Category::where('id', $id)->delete())
        {
            return redirect('/category')->with('success','Your data was deleted');
        }
        else
        {
            return redirect('/category')->with('failed','Your data not deleted');
        }       
    }
}
