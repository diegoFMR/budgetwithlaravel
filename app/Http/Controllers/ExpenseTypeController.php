<?php
	
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseType as ExpenseType;
use Illuminate\Routing\Redirector;
use DB;

class ExpenseTypeController{

	public function create(Request $request){
		$id = $request->input('id');
		$name = $request->input('name');
		$description = $request->input('description');
		echo "ID: ". $id;
		//Validate if inert was succesfull
		// if(DB::table('expense_type')->
		// 	insert(['name'=> $name,'description'=>$description]) ){

			// return	redirect()->route('list_expense_type')->with('msj', 'INSERTED!!'); //Return to the view List	
		// }else{
		// 	echo "There was a problem;";
		// }

		
	}//end addExpenseType

	public function edit($id=''){

		if(!$id== ''){
			echo "Simonas: ". $id;


			$expenseType = DB::table('expense_type')->find($id);
			print_r($expenseType);

		}
		// $name = $request->input('name');
		// $description = $request->input('description');

		// //Validate if inert was succesfull
		// if(DB::table('expense_type')->
		// 	insert(['name'=> $name,'description'=>$description]) ){

		// 	return	redirect()->route('list_expense_type')->with('msj', 'INSERTED!!'); //Return to the view List	
		// }else{
		// 	echo "There was a problem;";
		// }

		
	}//end addExpenseType

	public function list(){

		$expensesTypes = DB::table('expense_type')->get();

		return view('expense_type/list_expenses_type',['expenses'=> $expensesTypes]);
	}//end addExpenseType

}//end Class

?>