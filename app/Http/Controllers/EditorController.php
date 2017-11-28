<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('editor', ['except' => 'test']);
    }

    public function index(){
        return view('admin.editor');
    }

    //page that is available for both users:admin and editor
    public function test(){
        return view('admin.test');
    }
}
