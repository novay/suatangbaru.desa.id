<?php

class ArticlesController extends AdminController {

     /**
     * Tampilkan halaman index artikel beserta seluruh artikel yang ada
     *
     * @return View
     */
    public function getIndex()
    {
        // Judul Halaman
        $title = Lang::get('backend/contents.article.title.index'); 

        // Ambil seluruh artikel yang ada
        $articles = Article::orderBy('created_at', 'DESC')->get();

        // Tampilkan halaman
        return View::make('backend.articles.index', compact('articles', 'title'));
    }

    /**
     * Tampilkan halaman artikel yang di pilih
     *
     * @return View
     */
    public function getShow($articleId)
    {
        // Ambil artikel yang dimaksud
        $articles = Article::find($articleId);

        // Tampilkan halaman
        return View::make('backend.articles.show', compact('articles'));
    }

    /**
     * Tampilkan form untuk menambah artikel baru
     *
     * @return Response
     */
    public function getCreate()
    {
        // Judul Halaman
        $title = Lang::get('backend/contents.article.title.create'); 

        // Beri nilai default untuk status dan komen.
        $demoArticle = new Article();
        $demoArticle->status = 1;
        $demoArticle->comment = 1;

        $passedArticle = $demoArticle;

        // Tampilkan halaman
        return View::make('backend.articles.create', compact('title', 'passedArticle'));
    }

    /**
     * Simpan data ke dalam database
     *
     * @return Response
     */
    public function postCreate()
    {
        // Input semua yang ada ke dalam variabel input
        $input = Input::all();

        // Author untuk admin
        $author = Input::get('authorId');

        // Deklarasikan aturan validasi
        $rules = [
            'title'   => 'required|min:3'

        ];

        // Pesan error yang akan ditampilkan
        $messages = [
            'title.required' => Lang::get('backend/contents.article.validation.required'),
            'title.min'      => Lang::get('backend/contents.article.validation.min'),
        ];

        // Validasi semua input yang ada berdasarkan rules beserta pesan.
        $v = Validator::make($input, $rules, $messages);

        // Jika validasi sukses
        if ($v->passes())
        {    
            // Buat variabel yang menampung data yg dituju
            $article = new Article;

            // Update data artikel yang di ubah
            $article->categoryId   = e(Input::get('categoryId'));
            $article->title        = e(Input::get('title'));
            $article->alias        = e(Str::slug(Input::get('title')));
            $article->content      = Input::get('content');
            $article->authorId     = Auth::user()->accessLevel == 1 ? $author + 1 : Auth::user()->id;
            $article->status       = Input::get('status');
            $article->comment      = Input::get('comment');
            $article->save();

            // Kembali ke halaman index artikel dengan pesan sukses
            return Redirect::route('articles')
                ->with('success', Lang::get('backend/general.other.congrate') . ' ' . Lang::get('backend/contents.article.success.create'));
        }

        // Jika validasi gagal, maka kembali ke halaman sebelumnya dengan error validasi...
        return Redirect::back()
            ->withInput()
            ->withErrors($v);
    }

    /**
     * Tampilkan halaman edit artikel
     *
     * @param  int  $articleId
     * @return View
     */
    public function getEdit($articleId = null)
    {
        // Judul Halaman
        $title = Lang::get('backend/contents.article.title.edittitle');

        // Beri nilai default untuk status dan komen.
        $demoArticle = new Article();
        $demoArticle->status = 1;
        $demoArticle->comment = 1;

        $passedArticle = $demoArticle;

        // Periksa ketersediaan kategory dalam database, jika tidak ada...
        if (is_null($article = Article::find($articleId)))
        {
            // Kembali ke halaman index artikel dengan pesan error
            return Redirect::route('articles')
                ->with('error', Lang::get('backend/contents.article.error.edit'));
        }

        // Tampilkan halaman
        return View::make('backend.articles.edit', compact('article', 'title', 'passedArticle'));
    }

    /**
     * Update artikel yang Anda edit sebelumnya
     *
     * @param $article
     * @return Response
     */
    public function putEdit($articleId = null)
    {
        // Input semua yang ada ke dalam variabel input
        $input = Input::all();

        // Deklarasikan aturan validasi
        $rules = [
            'title'   => 'required|min:3'
        ];

        // Pesan error yang akan ditampilkan
        $messages = [
            'title.required' => Lang::get('backend/contents.article.validation.required'),
            'title.min'      => Lang::get('backend/contents.article.validation.min'),
        ];

        // Validasi semua input yang ada
        $v = Validator::make($input, $rules, $messages);

        // Jika validasi berhasil, maka...
        if ($v->passes())
        {
            // Ambil author untuk admin
            $author = Input::get('authorId');

            // Buat variabel yang menampung data yg dituju
            $article = Article::find($articleId);

            // Update data artikel yang di ubah
            $article->categoryId   = e(Input::get('categoryId'));
            $article->title        = e(Input::get('title'));
            $article->alias        = e(Str::slug(Input::get('title')));
            $article->content      = Input::get('content');
            $article->authorId     = Auth::user()->accessLevel == 1 ? $author + 1 : Auth::user()->id;
            $article->status       = Input::get('status');
            $article->comment      = Input::get('comment');
            $article->save();

            // Kembali ke halaman index artikel dengan pesan sukses
            return Redirect::route('articles')
                ->with('success', Lang::get('backend/general.other.congrate') . ' ' . Lang::get('backend/contents.article.success.edit'));
        }

        // Jika validasi gagal
        return Redirect::back()
            ->withInput()
            ->withErrors($v);
    }

    /**
     * Aksi hapus.
     *
     * @param  int  $categoryId
     * @return Response
     */
    public function getDestroy($articleId)
    {
       Article::find($articleId)->delete();

        // ...
        return Redirect::back()
            ->with('success', Lang::get('backend/general.other.congrate') . ' ' . Lang::get('backend/contents.article.success.delete'));
    }
 

}