<?php

class CommentsController extends AdminController {

     /**
     * Tampilkan halaman index kategori beserta seluruh kategori yang ada
     *
     * @return View
     */
    public function getIndex()
    {
        // Judul Halaman
         $title = Lang::get('backend/contents.comment.title.index'); 

        // Ambil seluruh kategori yang ada
        $comments = Comment::orderBy('created_at', 'DESC')->get();

        // Tampilkan halaman
        return View::make('backend.comments.index', compact('comments', 'title'));
    }

}