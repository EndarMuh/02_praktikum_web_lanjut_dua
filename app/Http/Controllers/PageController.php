<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "Muhammad Endar Darmawan | 2141720160";
    }

    public function articles($id) {
        echo "Halaman Artikel dengan ID ".$id;
    }
}