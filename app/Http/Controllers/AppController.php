<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class AppController extends Controller
{
    public  function  index()
    {
        return view('welcome');
    }

    public  function  dashboard()
    {
        return view('dashboard');
    }

    public function pages()
    {
        $data = [];
        $data['header'] = 'страницы';
        $pages = Page::all();

        return  view('pages',compact('pages', 'data'));
    }

    public function products()
    {
        return  view('products');
    }

    public function page($link)
    {
        return  view('page');
    }

}
