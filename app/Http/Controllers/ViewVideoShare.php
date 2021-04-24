<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewVideoShare extends Controller
{
    public function Index() {
        return view('view_share_video');
    }
}
