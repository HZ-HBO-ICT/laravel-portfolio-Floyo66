<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class BlogController extends Controller
{
    public function show()
    {
        return view('blog');
    }
}
