<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "BERANDA | SAPTA",
            'page' => "Beranda",

        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => "TENTANG KAMI | SAPTA",
            'page' => "Tentang Kami",
            'section' => "Tentang Kami"


        ];

        return view('pages/about', $data);
    }

    public function program()
    {
        $data = [
            'title' => "PROGRAM KAMI | SAPTA",
            'page' => "Program Kami",
            'section' => "Program Kami"

        ];
        return view("pages/program", $data);
    }
    public function news()
    {
        $data = [
            'title' => "BERITA | SAPTA",
            'page' => "Berita",
            'section' => "Berita"

        ];
        return view("pages/news", $data);
    }
}
