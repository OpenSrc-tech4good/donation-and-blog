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
    public function read()
    {
        return view('blog.read', ['data'=>'Based off id fed to db']);
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
