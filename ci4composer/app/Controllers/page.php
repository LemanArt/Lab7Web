<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman Artikel',
            'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function contact()
    {
        return view('Contact', [
            'title' => 'Halaman Kontak',
            'content' => 'Ini adalah halaman kontak yang menjelaskan tentang isi halaman ini.'
        ]);
    }
}
