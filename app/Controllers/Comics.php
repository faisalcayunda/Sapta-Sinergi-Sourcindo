<?php

namespace App\Controllers;

use App\Models\ComicModel;

class Comics extends BaseController
{
    protected $comicModel;

    public function __construct()
    {
        $this->comicModel = new ComicModel();
    }
    public function index()
    {
        // $komik = $this->comicModel->findAll();
        $data = [
            'title' => "KONTAK KAMI | SAPTA",
            "komik" => $this->comicModel->getComic()

        ];


        return view('comics/index', $data);
    }
    public function detail($slug)
    {
        $komik =
            $data = [
                'title' => 'Detail Komik',
                'komik' =>  $this->comicModel->getComic($slug)
            ];
        return view("comics/detail", $data);
    }
}
