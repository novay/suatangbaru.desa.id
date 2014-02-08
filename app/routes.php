<?php


    /** ------------------------------------------
	 *  Frontend Routes
	 *  ------------------------------------------
	 */

    Route::get('/', ['as'=>'home', 'uses'=>'FrontendController@getIndex']);

    Route::get('statistik', ['as'=>'statistik', 'uses'=>'FrontendController@getStatistik']);
    Route::get('kabar-desa', ['as'=>'kabar-desa', 'uses'=>'FrontendController@getKabarDesa']);
    Route::get('gallery', ['as'=>'gallery', 'uses'=>'FrontendController@getGallery']);

    Route::get('lembaga/pemerintahan-desa', ['as'=>'pemerintahan-desa', 'uses'=>'FrontendController@getPemerintahanDesa']);
    Route::get('lembaga/badan-pemusyawaratan-desa', ['as'=>'badan-pemusyawaratan-desa', 'uses'=>'FrontendController@getBPD']);
    Route::get('lembaga/lembaga-pengabdian-masyarakat', ['as'=>'lembaga-pengabdian-masyarakat', 'uses'=>'FrontendController@getLPM']);

    Route::get('artikel-list', ['as'=>'article-list', 'uses'=>'FrontendController@getArticle']);

	Route::get('artikel/{postAlias}', ['as' => 'view-article', 'uses' => 'FrontendController@getView']);
	Route::post('artikel/{postAlias}', 'FrontendController@postComment');


	 /** ------------------------------------------
	 *  Backend Routes
	 *  ------------------------------------------
	 */

	 # Admin Panel


	Route::get('login', ['as'=>'login', 'uses'=>'AuthController@getLogin']);
	Route::post('login', 'AuthController@postLogin');
	Route::get('logout', ['as'=>'logout', 'uses'=>'AuthController@getLogout']);

	Route::get('admin', ['as'=>'admin', 'before'=>'auth', 'uses'=>'AuthController@getAdmin']);

	# Ajax Handler untuk nangani ajax effect javascript
	Route::get('ajaxhandler', function() { return View::make('backend.ajaxhandler'); });


	# Backend Collection
	Route::group(['prefix' => 'backend', 'before' => 'auth'], function()
	{

		 /** ------------------------------------------
		 *  Content Manager
		 *  ------------------------------------------
		 */

		 # Article Management
		Route::get('articles', ['as'=>'articles', 'uses'=>'ArticlesController@getIndex']);
	 	Route::get('articles/{articleId}', ['as'=>'showArticle', 'uses'=>'ArticlesController@getShow'])->where('articleId', '[0-9]+');
		Route::get('articles/create', ['as'=>'newArticle', 'uses'=>'ArticlesController@getCreate']);
		Route::get('articles/{articleId}/edit', ['as'=>'editArticle', 'uses'=>'ArticlesController@getEdit'])->where('articleId', '[0-9]+');
		Route::group(['before'=>'csrf'], function()
		{
			Route::post('articles/create', 'ArticlesController@postCreate');
			Route::put('articles/{articleId}/edit', 'ArticlesController@putEdit')->where('articleId', '[0-9]+');
		});
		Route::get('article/{articleId}/delete', ['as'=>'deleteArticle', 'uses'=>'ArticlesController@getDestroy'])->where('articleId', '[0-9]+');
		

	 	# Category Management
		Route::get('categories', ['as'=>'categories', 'uses'=>'CategoriesController@getIndex']);
		Route::get('categories/create', ['as'=>'newCategory', 'uses'=>'CategoriesController@getCreate']);
		Route::get('categories/{categoryId}/edit', ['as'=>'editCategory', 'uses'=>'CategoriesController@getEdit'])->where('categoryId', '[0-9]+');
		Route::group(['before'=>'csrf'], function()
		{
			Route::post('categories/create', 'CategoriesController@postCreate');
			Route::put('categories/{categoryId}/edit', 'CategoriesController@putEdit')->where('categoryId', '[0-9]+');
		});
		Route::get('category/{categoryId}/delete', ['as'=>'deleteCategory', 'uses'=>'CategoriesController@getDestroy'])->where('categoryId', '[0-9]+');
		
		# Comment Management
		Route::get('comments', ['as'=>'comments', 'uses'=>'CommentsController@getIndex']);

	});

