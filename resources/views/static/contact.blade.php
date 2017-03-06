@extends('templates/header')

@section('main')
	<div class="row">

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="contact.php">
				<div class="form-group">
					<label for="name">Nom prénom</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Nom prénom">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>

				<div class="form-group">
					<label for="input">Sujet</label>
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet">
				</div>
				
				<div class="form-group">
					<label for="input">Message</label>
					<textarea class="form-control" id="message" placeholder="Message" name="message" rows="8"></textarea>
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