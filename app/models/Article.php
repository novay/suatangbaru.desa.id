<?php

class Article extends Eloquent {

	protected $guarded = array();

	/**
	 * Harus artikel.
	 *
	 * @return bool
	 */
	public function delete()
	{
		// Hapus Kategori
		return parent::delete();
	}

	 /**
	 * Relasi User.
	 *
	 * @return User
	 */
	public function User()
    {
        return $this->belongsTo("User",'authorId');
    }

	/**
	 * Relasi Kategori.
	 *
	 * @return Category
	 */
	public function Category()
	{
		return $this->belongsTo("Category","categoryId");
	}

	/**
	 * Relasi Komen.
	 *
	 * @return bool
	 */
	public function Comments()
    {
        return $this->hasMany('Comment',"articleId");
    }

    /**
     * Buat url artikel
     *
     * @return $url
     */
    public function UrlArtikel()
    {
        return URL::route('view-article', $this->alias);
    }

    /**
     * Child Kategori
     *
     * @return $kategori
     */
    public function ChildKategori()
    {
    	// Jika id kategori bernilai null, do nothin...
        if( $this->id == null ) return null;

        // Sedangkan, jika berisi ...
        // Ambil nilai dari id kategori milik artikel
        $kategori = Category::find($this->categoryId);

        // Buat variabel baru bernilai sama untuk di kirim
        $this->parentCategory = $kategori;

        // Jika parent id kategori memiliki nilai
        if( $kategori->parentId != null )

        	// Sertakan nilai kategori
            return $kategori; 
        else
        	// Do nothin...
            return null;
    }

    /**
     * Parent Kategori
     *
     * @return $kategori
     */
    public function ParentKategori()
    {
    	// jika id bernilai null, do nothin
        if( $this->id == null ) return null;

        // Ambil id kategori
        $kategori = Category::find($this->categoryId);

        // Jika parentId tidak bernilai kosong
        if( $kategori->parentId != null )

        	// gunakan parentId
            return Category::find($kategori->parentId);

        else

        	// gunakan id kategori
            return $kategori;
    }

    /**
     * Fungsi tanggal posting
     *
     * @return $tanggal
     */
    public function tglPosting()
    {
    	// Konversi string ke format waktu
        $datetime = strtotime($this->created_at);

        // Tentukan format yg di inginkan 
        // { July 27, 2013 }
        $tanggal = date("F j, Y", $datetime);

        return $tanggal;
    }

}