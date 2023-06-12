<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceholderAPIController extends Controller
{
    public function index()
    {
        // $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');
        // dd($response->json()['title']);
        // dd($response->collect()->count());
        // return view('placeholderAPI.index',['posts' => $response->json()]);

        //post smth

        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'My super title',
            'body' => 'My super body',
            'userId' => '175',
        ]);

        dd($response->json());
    }
}
