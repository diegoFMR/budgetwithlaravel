<!DOCTYPE html>
<html>
<head>
	<title>List of expenses</title>
</head>
<body>

	<h3>List of Expenses</h3>

	<div>
		
		@if (session('msj'))
			{{session('msj')}}
		@endif

		@foreach($expenses as $expense)
			Name: {{ $expense->name }}, Description: {{ $expense->description }} 
			<a href="/edit/expense-type/{{$expense->id}}" class="btn btn-info">Edit </a>
			<a href="/delete/expense-type/{{$expense->id}}" class="btn btn-info" role="button">Delete</a>
		@endforeach
	</div>
</body>
</html>