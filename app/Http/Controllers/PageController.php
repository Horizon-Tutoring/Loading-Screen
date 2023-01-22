<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class PageController extends Controller
{
    public function index() {
        $faq = FAQ::all();
        return view('welcome')->with('faq', $faq);
    }
}
