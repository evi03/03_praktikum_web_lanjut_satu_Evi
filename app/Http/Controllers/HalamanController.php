<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function Home(){
        return view("halamanPraktikum/home");
    }

    function product(){
        return view("halamanPraktikum/product");
    }

     function news($news = null) {
         return view ("halamanPraktikum/news", ['news' => $news]);
     }

    function program(){
        return view("halamanPraktikum/program");
    }

    function about_us(){
        return view("halamanPraktikum/about-us");
    }

    public function contact_us(){
         return view("halamanPraktikum/contact-us", [
            'insta' => '@evyam_', 
            'email' => 'evi.nzbk@gmail.com']);

     }

}

