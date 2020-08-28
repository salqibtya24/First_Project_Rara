<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
	public function index ()

	{
		$articles = Article::paginate(5);
		/*$articles = [
			['title' => 'judul pertama', 'subject' => 'ini isi pertama'],
			['title' => 'judul kedua', 'subject' => 'ini isi kedua'],
			['title' => 'judul ketiga', 'subject' => 'ini isi ketiga'],
		];
 */
		return view('article.index', compact('articles'));

	}

	/*menggambil data secara dinamis, contoh ke halaman selanjutnya tanpa menambah route*/

	public function show($slug)
	{
		/*die($slug);*/ 
		/*return view('single', ['title' => $slug]); /*cara oper variabel data*/

		/*misalnya bukan title slug*/
		return view('article.single', compact('slug'));
	}

	public function create()
	{
		
	}

}
