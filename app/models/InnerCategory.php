<?php

class InnerCategory extends Eloquent {

	public $table = 'categories';

    /**
	 * Relasi ke Kategori
	 *
	 * @return Category
	 */
    public function Category()
    {
        return $this->belongsTo("Category", 'id');
    }
}
