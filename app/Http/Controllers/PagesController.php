<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index() {
        $title = "Главная страница";
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = "Контакты";
        return view('pages.about')->with('title', $title);;
    }

    public function services() {
        $data = [
            'title'=>'Наши услуги',
            'services'=> [
                'Design', 'Programing', 'CEO'
            ]
        ];
        return view('pages.services')->with($data);
    }

    public function base() {
        $counter = DB::table('citizen')->count();;
        $title = "База данных";
        $data = [
            'counter'=> $counter, 
            'title'=> $title
        ];

        return view('pages.base')->with($data);
    }

    public function reference() {
        return view('pages.reference');
    }

    public function gallery() {
        return view('pages.gallery');
    }

    public function portfolio() {
        return view('pages.portfolio');
    }
}
