
<!DOCTYPE html>
<html>
<head>
	<title>Add Expense Type</title>
</head>
<body>

	<form method="post" action='/create/expense-type'>
		@csrf
		<input type="hidden" name="id" value="{{$expenseType->id}}">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" value="{{$expenseType->name}}" name="name" placeholder="Enter Name">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" rows="3" cols="40" class="form-control">{{$expenseType->description}}</textarea>

		</div>
		<div class="form-group">
			<button type="submit" value="submit" class="btn btn-primary mb-2">Create</button>
		</div>
	</form>


</body>
</html>