<?php

class CategoriesController extends AdminController {

     /**
     * Tampilkan halaman index kategori beserta seluruh kategori yang ada
     *
     * @return View
     */
    public function getIndex()
    {
        // Judul Halaman
         $title = Lang::get('backend/contents.category.title.index'); 

        // Ambil seluruh kategori yang ada
        $categories = Category::all();

        // Tampilkan halaman
        return View::make('backend.categories.index', compact('categories', 'title'));
    }

    /**
     * Tampilkan form untuk menambah kategori baru
     *
     * @return Response
     */
    public function getCreate()
    {
        // Judul Halaman
        $title = Lang::get('backend/contents.category.title.create');

        // Tampilkan halaman
        return View::make('backend.categories.create', compact('title'));
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

        // Deklarasikan aturan validasi
        $rules = [
            'name'   => 'required|min:3'
        ];

        // Pesan error yang akan ditampilkan
        $messages = [
            'name.required' => Lang::get('backend/contents.category.validation.required'),
            'name.min'      => Lang::get('backend/contents.category.validation.min')
        ];

        // Validasi semua input yang ada berdasarkan rules beserta pesan.
        $v = Validator::make($input, $rules, $messages);

        // Jika validasi sukses
        if ($v->passes())
        {
            // Update data kategori ke dalam database
            Category::create(
            [
                'name'     => e(Input::get('name')),
                'alias'    => e(Str::slug(Input::get('name'))),
                'parentId' => e(Input::get('parentId'))
            ]);

            // Kembali ke halaman index kategori dengan pesan sukses
            return Redirect::route('categories')
                ->with('success', Lang::get('backend/general.other.congrate') . ' ' . Lang::get('backend/contents.category.success.create'));
        }

        // Jika validasi gagal, maka kembali kehalaman sebelumnya dengan error validasi...
        return Redirect::back()
            ->withInput()
            ->withErrors($v);
    }

    /**
     * Tampilkan halaman edit kategori
     *
     * @param  int  $categoryId
     * @return View
     */
    public function getEdit($categoryId = null)
    {
        // Judul Halaman
        $title = Lang::get('backend/contents.category.title.edit');

        // Periksa ketersediaan kategory dalam database, jika tidak ada...
        if (is_null($category = Category::find($categoryId)))
        {
            // Kembali ke halaman index kategori dengan pesan error
            return Redirect::route('categories')
                ->with('error', Lang::get('backend/contents.category.error.edit'));
        }

        // Tampilkan halaman
        return View::make('backend.categories.edit', compact('category', 'title'));
    }

    /**
     * Update kategori yang Anda edit sebelumnya
     *
     * @param $category
     * @return Response
     */
    public function putEdit($categoryId = null)
    {
        // Input semua yang ada ke dalam variabel input
        $input = Input::all();

        // Deklarasikan aturan validasi
        $rules = [
            'name'   => 'required|min:3'
        ];

        // Pesan error yang akan ditampilkan
        $messages = [
            'name.required' => Lang::get('backend/contents.category.validation.required'),
            'name.min'      => Lang::get('backend/contents.category.validation.min')
        ];

        // Validasi semua input yang ada
        $v = Validator::make($input, $rules, $messages);

        // Jika validasi berhasil, maka...
        if ($v->passes())
        {
            // Buat variabel yang menampung data yg dituju
            $category = Category::find($categoryId);

            // Update data kategori yang di ubah
            $category->name         = e(Input::get('name'));
            $category->alias        = e(Str::slug(Input::get('name')));
            $category->parentId     = e(Input::get('parentId'));
            $category->save();

            // Kembali ke halaman index kategori dengan pesan sukses
            return Redirect::route('categories')
                ->with('success', Lang::get('backend/general.other.congrate') . ' ' . Lang::get('backend/contents.category.success.edit'));
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
    public function getDestroy($categoryId)
    {
       Category::find($categoryId)->delete();

        // ...
        return Redirect::back()
            ->with('success', Lang::get('backend/general.other.congrate') . ' ' . Lang::get('backend/contents.category.success.delete'));
    }

}