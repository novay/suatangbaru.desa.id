<?php

return array(

	'welcome'  => 'Welcome',

	# Home =================================================================

	'home' => [

		'view' => 'View Homepage',

		# Sidebar ==========================================================

		'home' => 'Home',
		'article' => 'Article',
		'category' => 'Category',
		'comment' => 'Comment',
		'config' => 'Configure',
		'logout' => 'Logout',

		# Content ==========================================================

		'dashboard' => 'Dashboard',
		'add' => 'Add New Article',
		'upload' => 'Gallery Upload',
		'message' => 'Message',
		'statistic' => 'Statistics',
		'recentpost' => 'Recent Posts',
		'recentcomment' => 'Recent Comments',
		'viewall' => 'View All'

	],

	# Login ================================================================

	'login' => [

		'head'	=> 'Administrator Gate',
		'user'	=> 'Username',
		'pass'	=> 'Password',
		'login'	=> 'Login',
		'fail'	=> 'Username or password is incorrect.'
	],

	# Category =============================================================
	
	'category' => [

		'title' => [
			'index'  	=> 'Category Management',
			'create' 	=> 'Create A New Category',
			'edit'	 	=> 'Edit Category',

			'list'		=> 'List Category',
			'add'		=> 'Add New',
			'editbread'		=> 'Edit'
		],

		'message' => [
			'empty'  	=> "You don't have any category.",
			'select'	=> 'Uncategorized',
		],

		'form' => [
			'name'		=> 'Category Name',
			'parent'	=> 'Parent Category (Optional)'
		],

		'success' => [
			'create' 	=> 'A new category has been added.',
			'edit'	 	=> 'Category has been updated.',
			'delete' 	=> 'Category has been deleted.'
		],

		'error' => [
			'edit'	 	=> "Sorry, you don't have that specified category."
		],

		'validation' => [
			'required'	=> 'Category name is required.',
			'min'		=> 'The category must be over than 3 digits.'
		]

	],

	# Article  =============================================================

	'article' => [

		'title' => [
			'index'  	=> 'Article Management',
			'create' 	=> 'Create A New Article',
			'edittitle'	=> 'Edit Article',
			'list'		=> 'List Article',
			'add'		=> 'Add New',
			'edit'		=> 'Edit'
		],

		'message' => [
			'empty'  	=> "You don't have any article."
		],

		'form' => [
			'name'		=> 'Article Name',
			'category'	=> 'Select Category',
			'title'		=> 'Title',
			'content'	=> 'Content',
			'final'		=> 'Final Setting',
			'status'	=> 'Status',
			'draft'		=> 'Draft',
			'publish'	=> 'Published',
			'author'	=> 'Author',
			'comment'	=> 'Enable Comment',
			'type'		=> 'Type your title',
			'sorry'		=> "It's not yours.",
			'content'	=> 'Content'
		],

		'success' => [
			'create' 	=> 'A new article has been added.',
			'edit'	 	=> 'Article has been updated.',
			'delete' 	=> 'Article has been deleted.'
		],

		'error' => [
			'edit'	 	=> "Sorry, you don't have that specified article."
		],

		'validation' => [
			'required'	=> 'Article name is required.',
			'min'		=> 'The article must be over than 3 digits.'
		]

	],
	
	# Comment  =============================================================

	'comment' => [

		'title' => [
			'index'  	=> 'Comment List',
			'list'		=> 'List'
		],

		'message' => [
			'empty'  	=> "You don't have any comment yet."
		],

		'table' => [
			'sender'	=> 'Sender Information',
			'time'		=> 'Time'
			
		],

		'success' => [
			'delete' 	=> 'Comment has been deleted.'
		],

		'error' => [
			'edit'	 	=> "Sorry, you don't have that specified comment."
		],

		'validation' => [
			
		]

	],

	
	

);