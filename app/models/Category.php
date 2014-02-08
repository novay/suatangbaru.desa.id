<?php

class Category extends Eloquent {

	protected $guarded = array();
    public $timestamps = false;

	/**
	 * Logika = Satu Kategori memiliki banyak artikel.
	 *
	 * @return array
	 */
	public function Article()
    {
        // Kategori diperkenankan memiliki artikel lebih dari 1
        return $this->hasMany('Article', 'categoryId');
    }

    /**
	 * 
	 *
	 * @return array
	 */
    public function InnerCategory()
    {
        // Kategori boleh memiliki sub kategori lebih dari 1
        return $this->hasMany('InnerCategory', 'parentId');
    }

	/**
	 * Hapus Kategori beserta artikel-artikelnya.
	 *
	 * @return bool
	 */
	public function delete()
	{
		// Hapus Kategori
		return parent::delete();
	}

	/**
	 * Membuat Dropdown Category.
	 *
	 * @return options
	 */
	public static function dropdown() 
	{
        // Ambil semua nilai model kategori
        $categories = Category::all();

        // Inisialisasi pilihsn array dengan nilai default
        $options[''] = Lang::get('backend/contents.category.message.select');

        // Lakukan perulangan
        foreach($categories as $category) 
        { 
            // Tampikan semua nama berdasarkan id kategori yang ada
        	$options[$category->id] = $category->name;
        }

        // Kirim nilai
        return $options;
    }

    /**
     * Membuat Dropdown Parent Category.
     *
     * @return options
     */
    public static function parentDropdown() 
    {
         // Ambil semua nilai model kategori
        $categories = Category::all();

        // Inisialisasi pilihsn array dengan nilai default
        $options[''] = Lang::get('backend/contents.category.message.select');

        // Lakukan perulangan
        foreach($categories as $category) 
        { 
            // Jika parent id kategori bernilai null
            if(($category->parentId) == null)

                // Tampikan semua nama berdasarkan id kategori yang ada
                $options[$category->id] = $category->name;
        }

        // Kirim semua nilai kategori yg id kategorinya bernilai null
        return $options;
    }

    /**
     * { Showing all Articles of Category named 'Kategori' / 'Kategori > Sub Kategori' }
	 *
	 * @return name
	 */
    public function KategoriDanSub()
    {
        // Jika parent id kategori bernilai null
        if( $this->parentId != null )
        {
            // Temukan dan beri nilai pada variabel baru berdasarkan parentId
            $detail = Category::find($this->parentId);

            // Kirim nilai { Kategori > Sub Kategori }
            return $detail->name.' > '.$this->name;
        }
        // Sebaliknya
        else
         
            // Kirim nilai { kategori } 
            return  $this->name;
    }

    /**
	 * Ambil alias kategori.
	 *
	 * @return alias
	 */
    public function UrlKategori()
    {
        // Jika parentId bernilai null
        if( $this->parentId != null ){

            // Temukan dan beri nilai pada variabel baru berdasarkan parentId
            $detail = Category::find($this->parentId);

            // Kirim nilai { localhost/kategori/subkategori }
            return '/'.$detail->alias.'/'.$this->alias;
        }
        // sebaliknya
        else
            
            // Kirim nilai { localhost/kategori/subkategori }
            return '/'.$this->alias;
    }

}