<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	@if(\Session::has('success'))
     <div class="alert"> 
     <h4>{{\Session::get('success')}}</h4>
     </div>
	@endif
<form action="add_data" method="post">
	{{csrf_field()}}
	<div class="container">
		<div class="jumbotron" style="margin-top: 5% ;">
			<h1> Formulaire</h1>
              <hr>
        <div class="form-group">
        	<label> Nom d'étudiant</label>
        	<input type="text" class="form-control"  name="nom" placeholder="entrez votre nom">
        </div> 
        <div class="form-group">
        	<label> Prénom d'étudiant</label>
        	<input type="text" class="form-control"  name="prenom" placeholder="entrez votre prénom">
        </div> 
        <div class="form-group">
        	<label> Email d'étudiant</label>
        	<input type="email" class="form-control"  name="email" placeholder="entrez votre email">
        </div> 
        <div class="form-group">
        	<input type="password" class="form-control"  name="password" placeholder="entrez votre mot de passe">
        </div> 

        <div class="form-group">
        	<input type="password" class="form-control"  name="password_confirmation" placeholder="confirmez votre mot de passe">
        </div> 
        <input type="submit" name="submit" class="btn btn-primary" value="save" >
        <a href="/studentview" class="btn btn-primary" > Retourner a la vue</a>
		</div>
	</div>
</form>
</body>
</html>