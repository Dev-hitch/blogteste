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

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('postagens');
});
Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@login')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do', 'AuthController@authlogin')->name('admin.login.do');

 Route::resource('postagens', 'PostController')->names('posts')->parameters(['postagens'=>'post']);

 /*
  *Routes to Posts Resource
  *+--------+-----------+-------------------------+---------------+---------------------------------------------+--------------+
| Domain | Method    | URI                     | Name          | Action                                      | Middleware   |
+--------+-----------+-------------------------+---------------+---------------------------------------------+--------------+
|        | GET|HEAD  | /                       |               | Closure                                     | web          |
|        | GET|HEAD  | api/user                |               | Closure                                     | api,auth:api |
|        | GET|HEAD  | postagens               | posts.index   | App\Http\Controllers\PostController@index   | web          |
|        | POST      | postagens               | posts.store   | App\Http\Controllers\PostController@store   | web          |
|        | GET|HEAD  | postagens/novo          | posts.create  | App\Http\Controllers\PostController@create  | web          |
|        | GET|HEAD  | postagens/{post}        | posts.show    | App\Http\Controllers\PostController@show    | web          |
|        | PUT|PATCH | postagens/{post}        | posts.update  | App\Http\Controllers\PostController@update  | web          |
|        | DELETE    | postagens/{post}        | posts.destroy | App\Http\Controllers\PostController@destroy | web          |
|        | GET|HEAD  | postagens/{post}/editar | posts.edit    | App\Http\Controllers\PostController@edit    | web          |
+--------+-----------+-------------------------+---------------+---------------------------------------------+--------------+

  */

Route::resource('categorias', 'CategoryController')->names('categories')->parameters(['categorias'=>'category']);

/*Routes to Categories resource
 *
 *+--------+-----------+------------------------------+--------------------+-------------------------------------------------+--------------+
| Domain | Method    | URI                          | Name               | Action                                          | Middleware   |
+--------+-----------+------------------------------+--------------------+-------------------------------------------------+--------------+
|        | GET|HEAD  | /                            |                    | Closure                                         | web          |
|        | GET|HEAD  | api/user                     |                    | Closure                                         | api,auth:api |
|        | GET|HEAD  | categorias                   | categories.index   | App\Http\Controllers\CategoryController@index   | web          |
|        | POST      | categorias                   | categories.store   | App\Http\Controllers\CategoryController@store   | web          |
|        | GET|HEAD  | categorias/novo              | categories.create  | App\Http\Controllers\CategoryController@create  | web          |
|        | GET|HEAD  | categorias/{category}        | categories.show    | App\Http\Controllers\CategoryController@show    | web          |
|        | PUT|PATCH | categorias/{category}        | categories.update  | App\Http\Controllers\CategoryController@update  | web          |
|        | DELETE    | categorias/{category}        | categories.destroy | App\Http\Controllers\CategoryController@destroy | web          |
|        | GET|HEAD  | categorias/{category}/editar | categories.edit    | App\Http\Controllers\CategoryController@edit    | web          |

 *
 */

Route::resource('usuarios', 'UserController')->names('users')->parameters(['usuarios'=> 'user']);

/*
 * Routes to Users resource
 *+--------+-----------+------------------------------+--------------------+-------------------------------------------------+--------------+
| Domain | Method    | URI                          | Name               | Action                                          | Middleware   |
+--------+-----------+------------------------------+--------------------+-------------------------------------------------+--------------+
|        | GET|HEAD  | usuarios                     | users.index        | App\Http\Controllers\UserController@index       | web          |
|        | POST      | usuarios                     | users.store        | App\Http\Controllers\UserController@store       | web          |
|        | GET|HEAD  | usuarios/novo                | users.create       | App\Http\Controllers\UserController@create      | web          |
|        | GET|HEAD  | usuarios/{user}              | users.show         | App\Http\Controllers\UserController@show        | web          |
|        | PUT|PATCH | usuarios/{user}              | users.update       | App\Http\Controllers\UserController@update      | web          |
|        | DELETE    | usuarios/{user}              | users.destroy      | App\Http\Controllers\UserController@destroy     | web          |
|        | GET|HEAD  | usuarios/{user}/editar       | users.edit         | App\Http\Controllers\UserController@edit        | web          |
+--------+-----------+------------------------------+--------------------+-------------------------------------------------+--------------+
 */
