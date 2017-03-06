@extends('templates/header')

@section('main')
<div class="row">

	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action="connecter.php" method="post">
			<div class="form-group">
				<label for="login">Email</label>
				<input type="text" class="form-control" id="login" name="login" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="mdp">Password</label>
				<input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
			</div>

			<button type="submit" class="btn btn-primary">
				Envoyer
			</button>
		</form>

	</div>
	<div class="col-md-4"></div>
	<div class="clearfix visible-md-block"></div>
</div>
@stop