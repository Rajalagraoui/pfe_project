<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="jumbotron">
	<form action="/update/{{$student[0]->id}}" method="post">
	{{csrf_field()}}
	<div class="container">
		<div class="jumbotron" style="margin-top: 5% ;">
			<h1> Formulaire</h1>
              <hr>
        <div class="form-group">
        	<label> Nom d'étudiant</label>
        	<input type="text" class="form-control"  name="nom" placeholder="entrez votre nom" id=" nom" value="{{$student[0]->nom}}" >
        </div> 
        <div class="form-group">
        	<label> Prénom d'étudiant</label>
        	<input type="text" class="form-control"  name="prenom" placeholder="entrez votre prénom" id="prenom" value="{{$student[0]->prenom}}">
        </div> 
        <div class="form-group">
        	<label> Email d'étudiant</label>
        	<input type="email" class="form-control"  name="email" placeholder="entrez votre email" id="email" value="{{$student[0]->email}}">
        </div> 
        <div class="form-group">
        	<input type="password" class="form-control"  name="password" placeholder="entrez votre mot de passe" id="password" value="{{$student[0]->password}}">
        </div> 

        <div class="form-group">
        	<input type="password" class="form-control"  name="password_confirmation" placeholder="confirmez votre mot de passe" id="password_confirmation" value="{{$student[0]->password_confirmation}}">
        </div> 
        <input type="submit" name="submit" class="bnt bnt-success" value="Update">
		</div>
	</div>
</form>
	</div>
</div>
</body>
</html>