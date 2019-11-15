## Traitement des fichiers V1

Créer un fichier donnees.txt que vous allez placer dans le même répertoire que le script PHP.

Supposons que ce fichier texte contienne la ligne suivante :

	"Salut à tous :)".


Soit alors, le code PHP suivant :
								
exemple1.php
								
	1. <?php
	2. // Instruction 1
	3. $fp = fopen ("donnees.txt", "r");
	4. // Instruction 2
	5. $contenu_du_fichier = fgets ($fp, 255);
	6. // Instruction 3
	7. fclose ($fp);
	8. // Instruction 4
	9. echo 'Notre fichier contient : '.$contenu_du_fichier;
	10. ?>

Ce qui affichera à l'écran :

Notre fichier contient : Salut à tous :)

Détaillons alors ce qui se passe :

• Instruction 1 : on ouvre le fichier donnees.txt en lecture seule à l'aide de la fonction fopen()
la lecture seule est obtenue à l'aide du paramètre r

• Instruction 2 : on lit le contenu du fichier à l'aide de la fonction fgets() et l'on place le contenu de ce fichier dans la variable $contenu_du_fichier (le paramètre 255 passé à la fonction fgets() correspond au nombre de caractères à lire : ici, on a donné 255, ce qui correspond a un choix totalement arbitraire. En effet, vous pouvez mettre n'importe quel nombre. En revanche, si vous mettez 20 et que votre fichier comporte 128 caractères, seuls les 20 premiers seront lus).

• Instruction 3 : on referme le fichier donnees.txt à l'aide de la fonction fclose(). En effet, nous avons déjà le contenu du fichier dans la variable $contenu_du_fichier, alors le fichier ne nous intéresse plus.

• Instruction 4 : on affiche donc le contenu du fichier donnees.txt (notez encore une fois l'utilité de la concaténation des chaînes de caractères).

exemple2.php

	1. <?php
	2. $fp = fopen ("toto/donnees.txt", "r");
	3. $contenu_du_fichier = fgets ($fp, 255);
	4. fclose ($fp);
	5. echo 'Notre fichier contient : '.$contenu_du_fichier;
	6. ?>



Les paramètres possibles de la fonction fopen() :

• r : ouvre en lecture seule, et place le pointeur de fichier au début du fichier.

• r+ : ouvre en lecture et écriture, et place le pointeur de fichier au début du fichier.

• w : ouvre en écriture seule; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.

• w+ : ouvre en lecture et écriture; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.

• a : ouvre en écriture seule; place le pointeur de fichier à la fin du fichier file. Si le fichier n'existe pas, on tente de le créer.

• a+ : ouvre en lecture et écriture; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer.


exemple3.php

	1. <?php
	2. // Instruction 1
	3. $fp = fopen ("compteur.txt", "r+");
	4. // Instruction 2
	5. $nb_visites = fgets ($fp, 11);
	6. // Instruction 3
	7. $nb_visites = $nb_visites + 1;
	8. // Instruction 4
	9. fseek ($fp, 0);
	10. // Instruction 5
	11. fputs ($fp, $nb_visites);
	12. // Instrcution 6
	13. fclose ($fp);
	14. // Instrcution 7
	15. echo 'Ce site compte '.$nb_visites.' visiteurs !';
	16. ?>

On a alors :
• Instruction 1 : on ouvre le fichier compteur.txt en lecture et en ecriture.
• Instruction 2 : on lit le contenu du fichier et on place ce contenu (qui est donc le nombre de visiteurs de notre page) dans la variable $nb_visites.
• Instruction 3 : on augmente le nombre de visites de 1.
• Instruction 4 : on place le pointeur du fichier à l'offset 0 grâce à l'instruction fseek(). En clair, on se positionne au tout début de notre fichier.
• Instruction 5 : grâce à l'instruction fputs(), on écrit dans notre fichier la nouvelle valeur correspondant au nombre de visites.
• Instruction 6 : on ferme le fichier.
• Instruction 7 : on affiche le nombre de visites de notre page !!!


