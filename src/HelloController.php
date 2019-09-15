<?php

namespace Thisisbird\Hello;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index(){
        $message = 'hello world ver2';
        return view('HelloWorld::welcome',compact('message'));
    }
}
