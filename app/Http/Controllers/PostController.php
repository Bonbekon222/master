<?php
namespace App\Http\Controllers;
class PostController extends Controller
{
    public function showW()
    {
        return ('test');
    }

    public function showWW()
    {
        return view('test');
    }

    public function showW1()
    {
        return view('test', ['var1'=>'1','var2'=>'2']);
    }

    public function showW2()
    {
        return view('post.show');
    }

    public function showW3()
    {
        return view('post.show', [
			'text' => 'page content',
		]);
    }

    public function showW4()
	{
		return view('post.show', [
			'title' => 'page title',
			'text'  => 'page contentic',
		]);
	}

}