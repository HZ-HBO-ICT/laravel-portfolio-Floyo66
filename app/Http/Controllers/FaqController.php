<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();

        return view('post', ['faq' => $faq
        ]);
    }
}
