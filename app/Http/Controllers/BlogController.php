<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = \App\blog::paginate(9);

        return view('blog.index', ['data' => $data]);
    }
    public function create(Request $req)
    {
        //add $req to db
        //generate id
        $id=1;
        return redirect('/blog/'.$id); // bring to read controller
    }
    public function read($id)
    {
        return view('blog.read', ['data'=>\App\blog::find($id), 'recents'=>\App\blog::get()]);
    }
    public function update()
    {
        //update from db
    }
    public function delete()
    {
        //remove from db
    }
}
