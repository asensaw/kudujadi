<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function sejarah()
    {
        $data = array('title' => 'Sejarah');
        return view('homepage.sejarah', $data);
    }

    public function visimisi()
    {
        $data = array('title' => 'Visi Misi');
        return view('homepage.visimisi', $data);
    }

    public function tujuan()
    {
        $data = array('title' => 'Tujuan Kompetensi Keahlian');
        return view('homepage.tujuan', $data);
    }

    public function prestasi()
    {
        $data = array('title' => 'Prestasi');
        return view('homepage.prestasi', $data);
    }

    public function ekskul()
    {
        $data = array('title' => 'Ekstrakurikuler');
        return view('homepage.ekskul', $data);
    }

    public function perpisahan()
    {
        $data = array('title' => 'Perpisahan');
        return view('homepage.perpisahan', $data);
    }

    public function ekstrakurikuler()
    {
        $data = array('title' => 'Ekstrakurikuler');
        return view('homepage.ekstrakurikuler', $data);
    }
}
