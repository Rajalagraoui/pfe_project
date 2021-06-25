<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
<div class="container" >
	<div class="jumbotron">
		@if(\Session::has('success'))
     <div class="alert alert-danger"> 
     <h4>{{\Session::get('success')}}</h4>
     </div>
	@endif
		<h1>Liste dses étudiants</h1>
		<hr>
		<div class="line" style="text-align: right;">
			<a href="/studentadd" class="btn btn-primary"> Ajouter Un nouveau étudiant</a>
		</div><br>
		<form>
		   <table class="table table-bordered">
		   	<thead class="thead-dark">
		   		<tr>
		   			<th> ID Etudiant</th>
		   			<th> Nom Etudiant</th>
		   			<th> Prénom Etudiant</th>
		   			<th> Email Etudiant</th>
		   			<th> mot de passe Etudiant</th>
		   			<th> Confirmation de mot de passe Etudiant</th>
		   			<th>EDIT</th>
		   			<th>DELETE</th>
		   		</tr>
		   		<tbody>
		   	</thead>
		   	@foreach ($student as $row)
		   	<tr style="background: white;">
		   		<td>{{$row->id}}</td>
		   		<td>{{$row->nom}}</td>
		   		<td>{{$row->prenom}}</td>
		   		<td>{{$row->email}}</td>
		   		<td>{{$row->password}}</td>
		   		<td>{{$row->password_confirmation}}</td>
		   		<td >
		   			<a href="click_edit/{{$row->id }}" class="btn btn-succes" style="background: green;">Modifier</a>
		   		</td>
                    
		   		<td><a href="click_delete/{{$row->id }}" class="btn btn-danger" style="background: red;">Supprimer</a></td>
		   	</tr>
		   	@endforeach
		        </tbody>
		   </table>	
		</form>
	</div>
</div>
</body>
</html>