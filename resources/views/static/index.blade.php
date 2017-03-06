@extends('templates.header')

@section('main')
	<div class="row text-center">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<h2 class="text-center">Confection</h2>
			<p>
				Double rideaux, voilages, stôres bâteaux, parois japonaises, couvres lits, housses de chaise, coussins...<br /><br />
				{!! HTML::image('images/autres/noeud.jpg') !!}
			</p>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<h2 class="text-center">Modification</h2>
			<p>
				Anciens rideaux, pose d'oeillets.<br /><br /><br />
				{!! HTML::image('/images/autres/rideau.jpg') !!}
			</p>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<h2 class="text-center">Restauration</h2>
			<p>
				Fauteuils, chaises, canapés...<br /><br /><br />
				{!! HTML::image('images/autres/chaise.jpg') !!}
			</p>
			</div>
			<div class="clearfix visible-md-block"></div>
		</div>


		<div class="row text-center little_margetop">
			{!! HTML::image('images/css/de_ciseaux.png', '', ['class' => 'border_brown']) !!}
			<br />
			<p>
			<h3>Particuliers & professionnels</h3>
			<h2>Devis Gratuit</h2>

				<p>
					Déplacement chez vous pour prendre les mesures et vous conseiller <br />
					Contacter <b>Judith Darricotte</b> au <b>02 97 74 89 95</b> ou au <b>06 71 31 04 61</b>.
				</p>
			</p>
		</div>
		<hr>
	</div>
@stop