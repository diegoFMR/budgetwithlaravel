<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<script src="{{asset('js/shared_scripts.js')}}"></script>
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
			<a href="javascript:;" data-toggle="modal" 
			onclick="deleteData('/delete/expense-type', {{$expense->id}})" 
data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
		@endforeach
	</div>

	@include('modal.delete_modal')
</body>
</html>