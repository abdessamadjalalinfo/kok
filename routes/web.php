<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gestion-budget',function()
{
    $x=date("Y")."-".(date("Y")+1);
    //dd($x);
    $test=\App\Budget::all()->where('annee','=',strval($x))->where('user_id','=',Auth::user()->id);
    //dd($test);
    if(sizeof($test)>=1)
    {
        foreach($test as $one){
        return redirect()->route('update',['id'=>$one->id]);
      }
    }
    
    return view('gestion-budget');
})->name('gestion-budget');

Route::get('/index','HomeController@index1')->name('index');


Route::get('/add-budget','HomeController@add')->name('add-budget');

Route::get('update-budget/{id}','HomeController@update')->name('update');


Route::get('supprimer-rub','HomeController@supp_rub')->name('supp-rub');

Route::get('update-rubrique','HomeController@update_rub')->name('update-rubrique');


Route::get('update-rubriqujzbrgfbhoe','HomeController@updatejzhf_rub')->name('update-ruerogihobrique');