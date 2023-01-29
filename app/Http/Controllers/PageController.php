<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\Staff;

class PageController extends Controller
{
    public function index() {
        $faq = FAQ::all();
        $staff = Staff::all();
        return view('welcome')->with('faq', $faq)->with('staff', $staff);
    }
}
