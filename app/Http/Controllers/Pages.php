<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    function index() {
        return view("index");
    }
    function about() {
        return view("about");
    }
    function category() {
        return view("category");
    }
    function news() {
        return view("news");
    }
    function projects() {
        return view("projects");
    }
}
