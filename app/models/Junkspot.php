<?php

class Junkspot extends Eloquent {

    /**
	 * Tentukan Status Artikel
	 *
	 * @return $temp
	 */
	public static function getStatusArtikel ($id = null)
    {
    	// Inisialisasikan 2 value
        $temp = [ Lang::get('backend/contents.article.form.draft') , Lang::get('backend/contents.article.form.publish') ];

        	// Cek Nilai Status Artikel, jika tidak NULL
        	if( $id != null )

        	// Tampilkan Published
        	return $temp[$id];
        
        // Jika NULL tampilkan Draft
        return $temp;
    }

    /**
     * Logika Author Artikel
     *
     * @return $users
     */
    static function getAuthorArtikel()
    {
        // Inisialisasi variabel array users baru
        $users = [];

        // Jika user bukan Admin...
        if( Auth::user()->accessLevel != 1 )

            // Tampilkan usernya saja
            return [ Auth::user()->displayName ];

        // Sedang, jika user admin
        foreach ( User::all() as $user ) 

        // Tampilkan semua user
        $users[] = $user['displayName'];

        return $users;
    }

    /**
     * Kirim Artikel Secara Keseluruhan
     *
     * @return $pesan
     */
    static function semuaArtikel(&$pesan, $orderby="id")
    {
        // Jika level user bukan admin
        if( Auth::user()->accessLevel != 1 )
        {
            // Buat pesan keterangan mengenai pemosting
            $pesan = "Showing all articles posted by you";

            // Kirim nilai dimana id author artikel = id user, urutkan secara desceding
            return Article::where( 'authorId', '=', Auth::user()->id )->orderBy($orderby, 'DESC');
        }
        // Sebaliknya, jika user admin
        else
        {
            // Tampilkan semua artikel
            $pesan = "Showing all articles";

            // Ambil seluruh artikel yang ada, urutkan secara descending
            return Article::orderBy($orderby, 'DESC');
        }
    }

    /**
     * Kirim semua artikel berdasarkan author ('Administator / Novay Mawbowo')
     *
     * @return artikel
     */
    static  function semuaArtikelByAuthor($id, &$pesan, $orderby="id")
    {
        // Buat pesan flash
        $pesan = "Showing all articles posted by " . ucfirst(User::find($id)->displayName);

        // Buat list artikel berdasarkan author yg sama dengan urutan decending berdasarkan id
        $artikel =  Article::where('authorId', '=', $id)->orderBy($orderby, 'DESC');
       
        // Kirim semua list berdasarkan aturan diatas
        return $artikel;
    }

    /**
     * Kirim semua artikel berdasarkan status ('Draft / Published')
     *
     * @return status
     */
    static function semuaArtikelByStatus($status, &$pesan, $orderby="id")
    {
        // Buat pesan flash
        $pesan = 'Showing all '. Junkspot::getStatusArtikel($status);

        // Buat list artikel berdasarkan status yg sama dengan urutan decending berdasarkan id
        $artikel = Article::where('status', '=', $status)->orderBy($orderby, 'DESC');

        // Kirim semua list berdasarkan aturan diatas
        return $artikel;
    }

    /**
     * Kirim semua artikel berdasarkan status ('Draft / Published')
     *
     * @return $artikel
     */
    static function semuaArtikelByUrlKategori($urlKategori, &$message, $orderby="id")
    {
        // Buat variabel untuk menampung nilai kategori yang nilai alias = url kategori
        $kategori = Category::where('alias', '=', $urlKategori)->first();

        // Buat variabel artikel bernilai array
        $artikel = [];

        // Ambil nilai artikel dimana categoryId bernilai sama dengan id kategori yg dimaksud
        $artikel = Article::where('categoryId', '=', $kategori->id);

        // Jika parentId bernilai null
        if( $kategori->parentId == null )
        {
            // 
            $parentKategori = $kategori->InnerCategory()->get();

            // 
            foreach($parentKategori as $tampung)

                // 
                $artikel = $artikel->or_where('categoryId', '=', $tampung->id);

        }

        // Jika user bukan admin, tampilkan artikelnya saja
        if(Auth::user()->accessLevel != 1)

            // 
            $artikel =  $artikel->where('authorId', '=', Auth::user()->id);

        // Buat pesan
        $message = "Showing all Articles of Category named " . $kategori->KategoriDanSub();

        return $artikel;
    }
    

}
