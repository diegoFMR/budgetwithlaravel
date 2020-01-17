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

// GET
Route::get('insert/expense-type', function(ExpenseType $expense){
	return view('insert_expense_type',['expenseType'=>$expense]);
});
Route::get('edit/expense-type/{id}', 'ExpenseTypeController@edit');

// POST
Route::post('create/expense-type', 'ExpenseTypeController@insert');
Route::put('delete/expense-type','ExpenseTypeController@delete');



// Route::get('edit/expense-type/{$id}','ExpenseTypeController@edit');

Route::get('list/expense-type', 'ExpenseTypeController@list')->name('list_expense_type');






?>
