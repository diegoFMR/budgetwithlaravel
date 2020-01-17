<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	
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



	<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
             	<input type="hidden" name="dataId" id="dataId">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>


   <script type="text/javascript">
     function deleteData(action, id)
     {
     	console.log(action + id);
     	 $("#dataId").attr('value', id);
         $("#deleteForm").attr('action', action);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
</body>
</html>