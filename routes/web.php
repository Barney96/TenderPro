 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PagesController@getHome');
Route::get('/tenders', 'PagesController@getTenders');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');


//Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

//Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
 
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

/* For get login page*/
    Route::get('/login', function () {return view('auth.login');});

 /* while post remember to user Auth\controllername so you can get the perfect path for the custom login  */
    Route::post('/login', 'Auth\LoginController@authentication')->name('login');