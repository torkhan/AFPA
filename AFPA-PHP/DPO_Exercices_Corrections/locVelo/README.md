## Corrections de l'exercice : locvelo

Sources : 

- debug : https://symfony.com/doc/current/components/debug.html  =>  composer require symfony/debug

- dumper :  https://symfony.com/doc/current/components/var_dumper.html  => composer require --dev symfony/var-dumper

- créez un fichier .htaccess dans lequel collez les lignes suivantes :

	RewriteEngine on
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule . index.php [NC,L] 

Les commandes pour créer votre fichier composer : conmposer init. 
Cette commande permets de créer les fichier composer.json.


Ajoutez dans le fichier composer.json, la ligne suivante : 

    "autoload": {
        "psr-4": {
            "src": "src/"
        }
    },