<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class AppController extends Controller
{
    public  function  index()
    {
        return view('home');
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
    public function profile($id)
    {
        return  view('page');
    }

    public function  storePage(Request $request)
    {
        $page = new Page;
        $page->name = 'page2';
        $page->link = 'shbssdhbs';
        $page->blocks = '{"a":"b"}';
        $page->save();

        return redirect('/editor')->with('success','страница добавлена успешно !');
      //  return   redirect('advt/create')->with('success','Обьявление добавлено успешно !');

    }

    public  function editor()
    {
        return  view('editor');
    }




}
