<!DOCTYPE html>
<html>
<head>
	<title>Expense Type</title>
</head>
<body>

	<form method="post" action='/create/expense-type'>
		@csrf
		<input type="hidden" name="id" value="{{$expenseType->id}}">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" 
			value="{{ (!old('name')) ? $expenseType->name: old('name') }}" name="name" placeholder="Enter Name">
			@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" rows="3" cols="40" class="form-control">{{ (!old('description')) ? $expenseType->description: old('description') }}</textarea>
			@error('description')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<button type="submit" value="submit" class="btn btn-primary mb-2">Insert</button>
		</div>
	</form>



</body>
</html>