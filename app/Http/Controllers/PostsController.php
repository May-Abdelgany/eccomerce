<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts=post::all();
        return $posts;
    }
}
