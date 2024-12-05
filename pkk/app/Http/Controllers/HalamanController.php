<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HalamanController extends Controller
{
    public function home()
    {
        return view('home', ["title" =>"Home"]);
    }
    public function about()
    {
        return view('about', ["title" =>"About"]);
    }
    public function produk()
    {
        return view('produk', ["title" =>"produk"]);
    }
    public function kontak()
    {
        return view('contact', ["title" =>"contact"]);
    }
    public function index()
    {
        return view('index', ["title" =>"post"]);
    }
    public function create()
    {
        return view('create', ["title" =>"create"]);
    }
    public function profil()
    {
        return view('profil', ["title" =>"profil"]);
    }
    public function suka()
    {
        return view('suka', ["title" =>"suka"]);
    }
    public function shop()
    {
        return view('shop', ["title" =>"shop"]);
    }
}
