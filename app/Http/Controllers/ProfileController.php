<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }
}

