<?php

namespace Thisisbird\Hello;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index(){
        $message = 'hello world';
        return view('HelloWorld::welcome',compact('message'));
    }
}
