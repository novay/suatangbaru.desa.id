<?php

return array(

	'welcome'  => 'Selamat Datang',

	# Home =================================================================

	'home' => [

		'view' => 'Lihat Halaman',

		# Sidebar ==========================================================

		'home' => 'Beranda',
		'article' => 'Artikel',
		'category' => 'Kategori',
		'comment' => 'Komentar',
		'config' => 'Pengaturan',
		'logout' => 'Keluar',

		# Content ==========================================================

		'dashboard' => 'Dasbor',
		'add' => 'Tambah Artikel Baru',
		'upload' => 'Galeri Unggah',
		'message' => 'Pesan',
		'statistic' => 'Statistik',
		'recentpost' => 'Artikel Terkini',
		'recentcomment' => 'Komentar Terkini',
		'viewall' => 'Selengkapnya'

	],

	# Login ================================================================

	'login' => [

		'head'	=> 'Gerbang Admin',
		'user'	=> 'Nama Pengguna',
		'pass'	=> 'Kata Sandi',
		'login'	=> 'Masuk',
		'fail'	=> 'Nama pengguna atau password bermasalah.'
	],

	# Category =============================================================
	
	'category' => [

		'title' => [
			'index'  	=> 'Kelola Kategori',
			'create' 	=> 'Buat Kategori Baru',
			'edit'	 	=> 'Ubah Kategori',

			'list'		=> 'Daftar Kategori',
			'add'		=> 'Buat Baru',
			'editbread'		=> 'Ubah'
		],

		'message' => [
			'empty'  	=> 'Anda belum memiliki kategori',
			'select'	=> 'Tanpa Kategori',
		],

		'form' => [
			'name'		=> 'Nama Kategori',
			'parent'	=> 'Kategori Induk (Optional)'
		],

		'success' => [
			'create' 	=> 'Kategori baru berhasil ditambahkan.',
			'edit'	 	=> 'Kategori berhasil diperbarui.',
			'delete' 	=> 'Kategori berhasil terhapus.'
		],

		'error' => [
			'edit'	 	=> 'Maaf, kategori yang anda cari bermasalah.'
		],

		'validation' => [
			'required'	=> 'Nama kategori wajib diisi.',
			'min'		=> 'Kategori harus berisi lebih dari 3 karakter.'
		]

	],

	# Article  =============================================================

	'article' => [

		'title' => [
			'index'  	=> 'Kelola Artikel',
			'create' 	=> 'Buat Artikel Baru',
			'edittitle'	=> 'Ubah Artikel',
			'list'		=> 'Daftar Artikel',
			'add'		=> 'Buat Baru',
			'edit'		=> 'Ubah'
		],

		'message' => [
			'empty'  	=> 'Anda belum memiliki artikel.'
		],

		'form' => [
			'name'		=> 'Nama Artikel',
			'category'	=> 'Pilih Kategori',
			'title'		=> 'Judul',
			'content'	=> 'Isi Artikel',
			'final'		=> 'Pengaturan Akhir',
			'status'	=> 'Status',
			'draft'		=> 'Konsep',
			'publish'	=> 'Terbit',
			'author'	=> 'Penulis',
			'comment'	=> 'Perbolah Komentar',
			'type'		=> 'Ketikkan Judul',
			'sorry'		=> 'Ini bukan Artikel Anda'
		],

		'success' => [
			'create' 	=> 'Artikel baru berhasil ditambahkan.',
			'edit'	 	=> 'Artikel berhasil diperbarui.',
			'delete' 	=> 'Artikel berhasil dihapus.'
		],

		'error' => [
			'edit'	 	=> 'Maaf, artikel yang anda maksud bemasalah.'
		],

		'validation' => [
			'required'	=> 'Judul Artikel wajib diisi.',
			'min'		=> 'Nama artikel harus berisi lebih dari 3 karakter.'
		]

	],
	
	# Comment  =============================================================

	'comment' => [

		'title' => [
			'index'  	=> 'Daftar Komentar',
			'list'		=> 'Daftar'
		],

		'message' => [
			'empty'  	=> 'Anda belum memiliki komentar.'
		],

		'table' => [
			'sender'	=> 'Informasi Komentator',
			'time'		=> 'Waktu'
			
		],

		'success' => [
			'delete' 	=> 'Komentar berhasil dihapus..'
		],

		'error' => [
			'edit'	 	=> 'Maaf, komentar yang anda maksud bermasalah.'
		],

		'validation' => [
			
		]

	],

	
	

);