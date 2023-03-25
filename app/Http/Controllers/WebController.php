<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view('website.index');
    }

    public function about() {
        return view('website.about');
    }

    public function services() {
        return view('website.services');
    }

    public function rooms() {
        return view('website.rooms');
    }

    public function booking() {
        return view('website.booking');
    }

    public function gallery() {
        return view('website.gallery');
    }

    public function contact() {
        return view('website.contact');
    }
}
