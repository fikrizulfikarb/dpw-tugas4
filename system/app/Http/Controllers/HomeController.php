<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showhome(){
        return view('frontview.home');
    }

    function showabout(){
        return view('frontview.about');
    }

    function showclient(){
        return view('frontview.client');
    }

    function showbrand(){
        return view('frontview.brand');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showlogin(){
        return view('login');
    }

    function showregistrasi(){
        return view('registrasi');
    }

    function showberanda(){
        return view('backview.beranda');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showproduk(){
        return view('backview.produk');
    }

    function showuser(){
        return view('backview.user');
    }

}