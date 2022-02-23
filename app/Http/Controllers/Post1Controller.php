<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class Post1Controller extends Controller
{
    public function show()
    {
        return view('post1');
    }
}
