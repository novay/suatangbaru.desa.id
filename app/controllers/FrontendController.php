<?php

class FrontendController extends AdminController {

	/**
	 * Menampilkan halaman homepage
	 *
	 * @return View
	 */
	public function getIndex()
	{
		// Ambil semua artikel yang ada berdasarkan created descending dengan status publish + 3 artikel/halaman
		$articles = Article::orderBy('created_at', 'DESC')->where('status', '=', 1)->paginate(3);

		// Tampilkan halaman
		return View::make('frontend.suatang.index', compact('articles'));

	}

	/**
	 * Menampilkan halaman statistik desa
	 *
	 * @return View
	 */
	public function getStatistik()
	{
		// Judul Halaman
		$title = "Statistik Desa Suatang Baru";

		// Tampilkan halaman
		return View::make('frontend.suatang.statistik', compact('title'));

	}

	/**
	 * Menampilkan halaman kabar desa
	 *
	 * @return View
	 */
	public function getKabarDesa()
	{
		// Judul Halaman
		$title = "Kabar Desa Suatang Baru";

		// Ambil semua artikel yang ada berdasarkan created descending dengan status publish + 3 artikel/halaman
		$articles = Article::orderBy('created_at', 'DESC')->where('status', '=', 1)->paginate(5);

		$comments = Comment::orderBy('created_at', 'DESC')->where('approved', '=', 1)->paginate(8);

		// Tampilkan halaman
		return View::make('frontend.suatang.kabar-desa', compact('articles', 'title', 'comments'));

	}

	/**
	 * Menampilkan halaman lembaga pemerintahan desa
	 *
	 * @return View
	 */
	public function getPemerintahanDesa()
	{
		// Judul Halaman
		$title = "Struktur Organisasi Pemerintahan Desa";

		// Tampilkan halaman
		return View::make('frontend.suatang.pemerintahan-desa', compact('title'));

	}

	/**
	 * Menampilkan halaman badan permusyaratan desa
	 *
	 * @return View
	 */
	public function getBPD()
	{
		// Judul Halaman
		$title = "Struktur Organisasi Badan Pemusyawaratan Desa";

		// Tampilkan halaman
		return View::make('frontend.suatang.badan-pemusyawaratan-desa', compact('title'));

	}

	/**
	 * Menampilkan halaman lembaga pengabdian masyarakat
	 *
	 * @return View
	 */
	public function getLPM()
	{
		// Judul Halaman
		$title = "Struktur Organisasi Lembaga Pengabdian Masyarakat";

		// Tampilkan halaman
		return View::make('frontend.suatang.lembaga-pengabdian-masyarakat', compact('title'));

	}

	/**
	 * Menampilkan artikel-artikel list
	 *
	 * @return View
	 */
	public function getArticle()
	{
		// Judul Halaman
        $title = 'Article List'; 

		// Ambil semua artikel yang ada berdasarkan created descending dengan status publish + 3 artikel/halaman
		$articles = Article::orderBy('created_at', 'DESC')->where('status', '=', 1)->paginate(3);

		// Tampilkan halaman
		return View::make('frontend.articles.list-article', compact('articles', 'title'));

	}

	/**
	 * Tampilkan halaman artikel.
	 *
	 * @param  string  $alias
	 * @return View
	 */
	public function getView($alias)
	{
		
		// Get this blog post data
		$article = Article::where('alias', '=', $alias)->first();

		// Check if the blog post exists
		if ($article == null)
		{
			// If we ended up in here, it means that
			// a page or a blog post didn't exist.
			// So, this means that it is time for
			// 404 error page.
			return App::abort(404);
		}

		// Get this post comments
		$comments = $article->comments()->orderBy('created_at', 'ASC')->get();

		// Show the page
		return View::make('frontend.suatang.view-artikel', compact('article', 'comments'));
	
	}



	/**
	 * Posting Komen Yang Ada
	 *
	 * @param  string  $alias
	 * @return Redirect
	 */
	public function postComment($id)
	{

		// Input semua yang ada ke dalam variabel input
        $input = Input::all();

        // Deklarasikan aturan validasi
        $rules = [
            'name'   => 'required',
            'content'=> 'required|min:3'
        ];

        // Pesan error yang akan ditampilkan
        $messages = [
            'name.required' => 'Nama wajib diisi.',
            'content.required' => 'Apa komentar Anda?',
            'content.min'      => 'Isi komentar minimal 3 karakter.',
        ];

        // Validasi semua input yang ada berdasarkan rules beserta pesan.
        $v = Validator::make($input, $rules, $messages);

        // Jika validasi sukses
        if ($v->passes())
        {    
            // Buat variabel yang menampung data yg dituju
            $comment = new Comment;

            // Update data artikel yang di ubah
            $comment->name     = e(Input::get('name'));
            $comment->email    = e(Input::get('email'));
            $comment->content  = e(Input::get('content'));
            $comment->articleId= $id;
        	$comment->approved = 1;
            $comment->save();

            // Was the comment saved with success?
		if($article->comments()->save($comment))
		{
			// Redirect to this blog post page
			return Redirect::back('#komentar')->with('success', 'Komentar berhasil ditambahkan.');
		}

	         // Jika validasi gagal, maka kembali ke halaman sebelumnya dengan error validasi...
	        return Redirect::back()
	            ->withInput()
	            ->withErrors($v);
        }

    }

}