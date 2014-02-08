<?php

class Comment extends Eloquent {

	protected $guarded = array();

	 /**
	 * Return the post's author.
	 *
	 * @return Category
	 */
	public function Article()
	{
		return $this->belongsTo("Article", 'articleId');
	}

	/**
	 * Harus komen.
	 *
	 * @return bool
	 */
	public function delete()
	{
		// Hapus komen
		return parent::delete();
	}

}