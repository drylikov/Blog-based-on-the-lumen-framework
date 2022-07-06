<?php

namespace App\Http\Controllers\Blog;

use Laravel\Lumen\Routing\Controller;

class IndexController extends Controller
{
    public function show()
    {
        return view('blog/index');
    }
}
