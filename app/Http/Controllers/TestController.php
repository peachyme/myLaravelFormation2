<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Mail\TestMarkdownMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except('bar');to assign a middleware to a specefic function
    }

    public function foo()
    {
        // if (! Gate::allows('access-admin'))
        // {
        //     abort(403);
        // }
        // return view('test.foo');
        return 'foo';
    }

    public function bar()
    {
        // $user = ['email' => 'user@test.com' , 'name' => 'mr smth'];

        // Mail::to($user['email'])->send(new TestMail($user));

        // Mail::to('test@gmail.com')->send(new TestMarkdownMail());

        // return view('test.bar');
        return 'bar';
    }
}
