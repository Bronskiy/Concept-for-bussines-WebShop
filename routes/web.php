<?php

// View::share('mainMenu', App\MainMenu::get());
// View::share('footerMenu', App\FooterMenu::get());
// View::share('parentCategories', App\Categories::where('category_parent', 0)->orderBy('category_order', 'asc')->take(8)->orderBy('category_name', 'asc')->get());
// View::share('featuredCompanies', App\Companies::where('company_status', 'active')->whereNotNull('company_logo')->take(6)->get());
// View::share('latestReviews', App\Reviews::orderBy('created_at', 'desc')->take(6)->get());
// View::share('howItWorks', App\HowItWorks::first());

//View::share('latestCompanies', App\Companies::take(4)->with('reviews')->orderBy('created_at', 'desc')->get());

Route::get('/', 'OnePageController@getHome');

Route::get('/search', 'ProductsController@search');
// Route::get('/products', 'ProductsController@getProducts');
Route::get('/product/{name?}', [
	'uses' => 'ProductsController@getProduct'
]);

Route::get('exportUsers', 'ImportExportController@exportUsers')->name('exportUsers');
Route::post('importUsers', 'ImportExportController@importUsers')->name('importUsers');

Route::get('exportAdressen', 'ImportExportController@exportAdressen')->name('exportAdressen');
Route::post('importAdressen', 'ImportExportController@importAdressen')->name('importAdressen');

Route::get('exportArtikel', 'ImportExportController@exportArtikel')->name('exportArtikel');
Route::post('importArtikel', 'ImportExportController@importArtikel')->name('importArtikel');

Route::get('exportPartlist', 'ImportExportController@exportPartlist')->name('exportPartlist');
Route::post('importPartlist', 'ImportExportController@importPartlist')->name('importPartlist');

Route::get('exportProjekt', 'ImportExportController@exportProjekt')->name('exportProjekt');
Route::post('importProjekt', 'ImportExportController@importProjekt')->name('importProjekt');
// Route::get('importExportView', 'ImportExportController@importExportView');

// Route::get('/pricing', 'OnePageController@getPricing');
// Route::get('/how-it-works', 'OnePageController@getHowItWorks');
// Route::get('/faq', 'OnePageController@getFAQ');
// Route::get('/about-us', 'OnePageController@getAbout');
// Route::get('/contactus', 'OnePageController@getContact');
// Route::post('/contactus/store', 'OnePageController@storeContact');
// Route::get('/add-business', 'OnePageController@addBusiness');
// Route::get('/thank-you', 'OnePageController@getThankYou');

//Route::get('/login', 'OnePageController@loginIndex');
//Route::post('login', [ 'as' => 'login', 'uses' => 'OnePageController@loginIndex']);
// Route::get('/terms', 'OnePageController@getTerms');
// Route::get('/privacy-policy', 'OnePageController@getPrivacy');
//
// Route::post('/search', 'SearchController@search');
//
// Route::get('/companies', 'CompanyController@index');
// Route::get('/category/{name?}', [
// 	'uses' => 'CompanyController@getCategory'
// ]);
// Route::get('/categories', 'CompanyController@getCategories');
/*
Route::get('/companies/{name?}', [
'uses' => 'CompanyController@getCompanies'
]);
*/

// Route::group(['prefix' => 'company'], function () {
	// Route::get('/', ['as' => 'company', 'uses' => 'CompanyController@index']);
	//  Route::get('create', ['as' => 'settings.create', 'uses' => 'MessagesController@create']);
	//  Route::post('/', ['as' => 'settings.store', 'uses' => 'MessagesController@store']);
// 	Route::get('{name}', ['as' => 'company', 'uses' => 'CompanyController@page']);
// 	Route::post('{name}/review', ['as' => 'company.review', 'uses' => 'CompanyController@review']);
// 	Route::post('{name}/contact', ['as' => 'company.contact', 'uses' => 'CompanyController@contact']);
// 	Route::get('{name}/report', ['as' => 'company.report', 'uses' => 'CompanyController@report']);
// 	Route::get('{name}/report-store', ['as' => 'company.report-store', 'uses' => 'CompanyController@reportStore']);
// 	Route::get('{name}/claim', ['as' => 'company.claim', 'uses' => 'CompanyController@claim']);
// 	Route::get('{name}/claim-store', ['as' => 'company.claim-store', 'uses' => 'CompanyController@claimStore']);
// 	Route::put('{name}/articles', ['as' => 'company.articles', 'uses' => 'CompanyController@getArticles']);
// });
//
// Route::get('/user', ['as' => 'user', 'uses' => 'UsersController@userLogin']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
