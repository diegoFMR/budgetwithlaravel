<?php
use App\ExpenseType as ExpenseType;
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


Route::get('edit/expense-type/{id}', 'ExpenseTypeController@edit');


Route::get('add/expense-type', function(ExpenseType $expense){
	return view('add_expense_type',['expenseType'=>$expense]);
});


// Route::get('edit/expense-type/{$id}','ExpenseTypeController@edit');

Route::get('list/expense-type', 'ExpenseTypeController@list')->name('list_expense_type');

Route::get('delete/expense-type/{$id}','ExpenseTypeController@delete');

Route::post('create/expense-type', 'ExpenseTypeController@create');


?>
