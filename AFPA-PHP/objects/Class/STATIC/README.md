{\rtf1\ansi\ansicpg1252\cocoartf1671\cocoasubrtf600
{\fonttbl\f0\fswiss\fcharset0 ArialMT;}
{\colortbl;\red255\green255\blue255;\red38\green38\blue38;\red239\green239\blue239;\red224\green224\blue224;
\red0\green0\blue173;\red255\green255\blue255;\red13\green103\blue1;\red210\green0\blue5;\red252\green106\blue8;
}
{\*\expandedcolortbl;;\cssrgb\c20000\c20000\c20000;\cssrgb\c94902\c94902\c94902;\cssrgb\c90196\c90196\c90196;
\cssrgb\c0\c0\c73333;\cssrgb\c100000\c100000\c100000;\cssrgb\c0\c46667\c0;\cssrgb\c86667\c0\c0;\cssrgb\c100000\c50196\c0;
}
\paperw11900\paperh16840\margl1440\margr1440\vieww28600\viewh16580\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs36 \cf0 ## Static class\
\
\pard\pardeftab720\sl360\partightenfactor0
\cf2 \cb3 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 	Le fait de d\'e9clarer des propri\'e9t\'e9s ou des m\'e9thodes comme statiques vous permet d'y acc\'e9der sans avoir besoin d'instancier la classe. \
	On ne peut acc\'e9der \'e0 une propri\'e9t\'e9 d\'e9clar\'e9e comme statique avec l'objet instanci\'e9 d'une classe (bien que ce soit possible pour une m\'e9thode statique).\
\
	Comme les m\'e9thodes statiques peuvent \'eatre appel\'e9es sans qu'une instance d'objet n'ait \'e9t\'e9 cr\'e9\'e9e, la pseudo-variable\'a0\cb4 $this\cb3 \'a0n'est pas disponible dans les m\'e9thodes d\'e9clar\'e9es 	comme statiques.\
\
\pard\pardeftab720\sl320\partightenfactor0
\cf2 \cb1 ### Avertissement\
\pard\pardeftab720\sl360\partightenfactor0
\cf2 	En PHP 7, l'appel statique de m\'e9thodes non-statiques est d\'e9conseill\'e9 et g\'e9n\'e8rera une alerte\'a0E_DEPRECATED. \
	La prise en charge de l'appel statique de m\'e9thodes non-statiques sera supprim\'e9 dans le futur.\
\pard\pardeftab720\sl320\partightenfactor0
\cf5 \cb6 \strokec5 \
\
	<?php\cb1 \
\pard\pardeftab720\sl320\partightenfactor0
\cf7 \cb6 \strokec7 		class\'a0\cf5 \strokec5 Foo\cb1 \
\cf7 \cb6 \strokec7 		\{\cb1 \
\cb6 		\'a0\'a0\'a0\'a0public\'a0static\'a0\cf5 \strokec5 $my_static\'a0\cf7 \strokec7 =\'a0\cf8 \strokec8 'foo'\cf7 \strokec7 ;\cb1 \
\
\cb6 		\'a0\'a0\'a0\'a0public\'a0function\'a0\cf5 \strokec5 staticValue\cf7 \strokec7 ()\'a0\{\cb1 \
\cb6 		\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0return\'a0\cf5 \strokec5 self\cf7 \strokec7 ::\cf5 \strokec5 $my_static\cf7 \strokec7 ;\cb1 \
\cb6 		\'a0\'a0\'a0\'a0\}\cb1 \
\cb6 		\}\cb1 \
\
\cb6 		class\'a0\cf5 \strokec5 Bar\'a0\cf7 \strokec7 extends\'a0\cf5 \strokec5 Foo\cb1 \
\cf7 \cb6 \strokec7 		\{\cb1 \
\cb6 			\'a0\'a0\'a0\'a0public\'a0function\'a0\cf5 \strokec5 fooStatic\cf7 \strokec7 ()\'a0\{\cb1 \
\cb6 				\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0return\'a0\cf5 \strokec5 parent\cf7 \strokec7 ::\cf5 \strokec5 $my_static\cf7 \strokec7 ;\cb1 \
\cb6 			\'a0\'a0\'a0\'a0\}\cb1 \
\cb6 		\}\cb1 \
\
\
\cb6 		print\'a0\cf5 \strokec5 Foo\cf7 \strokec7 ::\cf5 \strokec5 $my_static\'a0\cf7 \strokec7 .\'a0\cf8 \strokec8 "\\n"\cf7 \strokec7 ;\cb1 \
\
\pard\pardeftab720\sl320\partightenfactor0
\cf5 \cb6 \strokec5 		$foo\'a0\cf7 \strokec7 =\'a0new\'a0\cf5 \strokec5 Foo\cf7 \strokec7 ();\
\pard\pardeftab720\sl320\partightenfactor0
\cf7 \cb1 \
\pard\pardeftab720\sl320\partightenfactor0
\cf7 \cb6 		print\'a0\cf5 \strokec5 $foo\cf7 \strokec7 ->\cf5 \strokec5 staticValue\cf7 \strokec7 ()\'a0.\'a0\cf8 \strokec8 "\\n"\cf7 \strokec7 ;\cb1 \
\cb6 \
		print\'a0\cf5 \strokec5 $foo\cf7 \strokec7 ->\cf5 \strokec5 my_static\'a0\cf7 \strokec7 .\'a0\cf8 \strokec8 "\\n"\cf7 \strokec7 ;\'a0\'a0\'a0\'a0\'a0\'a0\cf9 \strokec9 //\'a0"Propri\'e9t\'e9"\'a0my_static\'a0non\'a0d\'e9finie\cb1 \
\
\cf7 \cb6 \strokec7 		print\'a0\cf5 \strokec5 $foo\cf7 \strokec7 ::\cf5 \strokec5 $my_static\'a0\cf7 \strokec7 .\'a0\cf8 \strokec8 "\\n"\cf7 \strokec7 ;\cb1 \
\pard\pardeftab720\sl320\partightenfactor0
\cf5 \cb6 \strokec5 \
		$classname\'a0\cf7 \strokec7 =\'a0\cf8 \strokec8 'Foo'\cf7 \strokec7 ;\cb1 \
\pard\pardeftab720\sl320\partightenfactor0
\cf7 \cb6 \
		print\'a0\cf5 \strokec5 $classname\cf7 \strokec7 ::\cf5 \strokec5 $my_static\'a0\cf7 \strokec7 .\'a0\cf8 \strokec8 "\\n"\cf7 \strokec7 ;\'a0\cf9 \strokec9 //\'a0Depuis\'a0PHP\'a05.3.0\cb1 \
\
\cf7 \cb6 \strokec7 		print\'a0\cf5 \strokec5 Bar\cf7 \strokec7 ::\cf5 \strokec5 $my_static\'a0\cf7 \strokec7 .\'a0\cf8 \strokec8 "\\n"\cf7 \strokec7 ;\cb1 \
\pard\pardeftab720\sl320\partightenfactor0
\cf5 \cb6 \strokec5 \
		$bar\'a0\cf7 \strokec7 =\'a0new\'a0\cf5 \strokec5 Bar\cf7 \strokec7 ();\cb1 \
\pard\pardeftab720\sl320\partightenfactor0
\cf7 \cb6 \
		print\'a0\cf5 \strokec5 $bar\cf7 \strokec7 ->\cf5 \strokec5 fooStatic\cf7 \strokec7 ()\'a0.\'a0\cf8 \strokec8 "\\n"\cf7 \strokec7 ;\cb1 \
\pard\pardeftab720\sl320\partightenfactor0
\cf5 \cb6 \strokec5 	?>}