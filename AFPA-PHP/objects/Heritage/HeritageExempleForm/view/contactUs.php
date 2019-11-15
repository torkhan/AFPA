<?php

require '../vendor/autoload.php';
require '../src/models/Contact.php';
require '../view/elements/head.php';

use App\models\Contact;

$form = new Contact();

?>

<div class="mt-5">
	<h2>Formulaire de contact</h2>
</div>
<form>

	<?php
		echo $form->getInputText("nom","text","nom", "Nom : ","Nom");

		echo $form->getInputText("prenom","text","prenom", "Prénom : ","Prénom");

		echo $form->getInputText("phone","phone","phone", "Numéro de téléphone : ","Numéro de téléphone");

		echo $form->getTextArea("description", "5","Description de votre demande");

		echo $form->getButton("submit", "Valider", "btn btn-success");
		echo '<a href="../index.php">'.$form->getButton("button", "Retour", "btn btn-danger").'</a>';
	?>
</form>
<?php
	require '../view/elements/footer.php';

