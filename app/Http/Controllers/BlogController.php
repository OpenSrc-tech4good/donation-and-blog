<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
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
        return view('blog.read', ['data'=>\App\blog::find($id)]);
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
