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

//Route::get('/', 'TodoController@index');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $name = 'tad';
    $say  = '嗨！';
    return view('welcome', compact('name', 'say'));
});
// Route::get('/{id}', function ($id) {
//     return 'id= '.$id;
// });

Route::get('/test', function(){
    return '<form method="POST" action="test"><input type="submit"></form>';
});


Route::get('foo', function () {
    return 'Hello World';
});


//Route::post('/Todo', 'TodoController@todo');
Route::get('/abc', function () {
        return '000';
    });
Route::get('/todo', 'TodoController@todo');



//導引至設定的首頁
//return view('tkoIndex'); 到resouces\views找尋tkoIndex.blade.php或是tkoIndex.php檔案
// Route::get('/', function () {
// 	$data = ['home'=>'旅遊台灣，首選高雄！','ahref'=>'<a href="./Tko">超連結</a>'];
//     return View::make('tkoIndex',$data);
// });

//首頁顯示文字
// Route::get('/', function () {
//     return 'hello world';
// });


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
