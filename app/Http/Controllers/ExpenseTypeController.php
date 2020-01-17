<?php
	
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseType as ExpenseType;
use Illuminate\Routing\Redirector;
use DB;

class ExpenseTypeController{

	public function insert(Request $request){
		$id = $request->input('id');
		$name = $request->input('name');
		$description = $request->input('description');

		//If it has ID it's an update
		if(!$id == ''){

			DB::table('expense_type')->where('id',$id)->update(['name'=> $name,'description'=>$description]);

			return	redirect()->route('list_expense_type')->with('msj', 'UPDATED!!'); //Return to the view List	

		}else{
			//Validate if insert was succesfull
			if(DB::table('expense_type')->
				insert(['name'=> $name,'description'=>$description]) ){

				return	redirect()->route('list_expense_type')->with('msj', 'INSERTED!!'); //Return to the view List	
			}else{
				echo "There was a problem;";
			}	
		}
		
	}//end addExpenseType

	public function edit($id=''){

		if(!$id== ''){
			echo "Simonas: ". $id;


			$expenseType = DB::table('expense_type')->find($id);

			return view('insert_expense_type', [ 'expenseType'=>$expenseType]);
		}
	}//end addExpenseType

	public function list(){

		$expensesTypes = DB::table('expense_type')->get();

		return view('expense_type/list_expenses_type',['expenses'=> $expensesTypes]);
	}//end addExpenseType

	public function delete(Request $request){
		$id = $request->input('dataId');

		DB::table('expense_type')->where('id',$id)->delete();
		
		return	redirect()->route('list_expense_type')->with('msj', 'Deleted succesfully!!');
	}//end addExpenseType

}//end Class

?>