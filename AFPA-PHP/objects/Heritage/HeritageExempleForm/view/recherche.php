<?php

	require '../vendor/autoload.php';
	require '../view/elements/head.php';

	use App\models\Contact;
	use App\models\Form;

	$form = new Form();

?>

	<div class="mt-5">
		<h2>Formulaire de recherche (en AJAX)</h2>
	</div>
	<div>
		<form method="post">
			<div>
				<?php
					echo $form->getInputText("recherche", "text","recherche","Recherchez votre article","Recherchez ...");
				?>
			</div>
			<div class="row">
					<?php
						echo $form->getButton("submit","Recherchez", "btn btn-primary","btnrecherche");

						echo '<a href="../index.php">'.$form->getButton("button", "Retour", "btn btn-danger").'</a>';
					?>

			</div>
		</form>
	</div>
	<div id="resultats">
		<p></p>
	</div>
<?php
	require '../view/elements/footer.php';

