{\rtf1\ansi\ansicpg1252\cocoartf1671\cocoasubrtf600
{\fonttbl\f0\fnil\fcharset0 Monaco;}
{\colortbl;\red255\green255\blue255;\red147\green2\blue147;\red249\green249\blue249;\red66\green147\blue61;
\red42\green44\blue51;\red219\green63\blue58;\red50\green94\blue238;\red143\green144\blue150;\red133\green85\blue6;
\red178\green113\blue7;\red28\green32\blue43;}
{\*\expandedcolortbl;;\csgenericrgb\c57647\c784\c57647;\csgenericrgb\c97647\c97647\c97647;\csgenericrgb\c25882\c57647\c23922;
\csgenericrgb\c16471\c17255\c20000;\csgenericrgb\c85882\c24706\c22745;\csgenericrgb\c19608\c36863\c93333;\csgenericrgb\c56078\c56471\c58824;\csgenericrgb\c52157\c33333\c2353;
\csgenericrgb\c69804\c44314\c2745;\csgenericrgb\c10980\c12549\c16863;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardirnatural\partightenfactor0

\f0\fs56 \cf2 \cb3 <?php\
	require \cf4 'connect.php'\cf5 ;\
\
	\cf6 $db \cf7 = connect\cf5 ();\
\cf2 try\cf5 \{\
	\cf8 // les variables\
	\cf6 $tvaRate \cf7 = \cf9 20\cf5 ;\
	\cf6 $articleFree \cf7 = \cf9 1\cf5 ;\
\
	\cf6 $req \cf7 = \cf6 $db\cf7 ->prepare\cf5 (\
		\cf4 'SELECT nom_article, price_ht_article, type_article FROM articles WHERE rate_tva_article = :tvarate AND article_free = :artfree'\cf5 );\
\
	\cf6 $req\cf7 ->bindParam\cf5 (\cf4 ":tvarate"\cf5 , \cf6 $tvaRate\cf5 , \cf10 PDO\cf7 ::\cf9 PARAM_INT\cf5 );\
	\cf6 $req\cf7 ->bindParam\cf5 (\cf4 ":artfree"\cf5 , \cf6 $articleFree\cf5 , \cf10 PDO\cf7 ::\cf9 PARAM_INT\cf5 );\
\
	\cf6 $req\cf7 ->execute\cf5 ();\
\
\cf8 /*\
	while($data = $req->fetchAll())\{\
		//var_dump($data);\
		foreach ($data as $key => $value)\{\
				echo '<p>La clef : '.$key.'  => la valeur :'.$value['nom_article'].'  '.$value["price_ht_article"]." ".$value["type_article"].'</p>';\
		\}\
	\}\
*/\
/*\
	while($data = $req->fetch(PDO::FETCH_ASSOC))\{\
		//var_dump($data);\
		echo $data['nom_article'].' '.$data["price_ht_article"]." ".$data["type_article"].'</br>';\
	\}\
\
*/\
		 \cf2 while\cf5 (\cf6 $data \cf7 = \cf6 $req\cf7 ->fetchObject\cf5 ())\{\
			\cf8 //var_dump($data);\
			\cf2 echo \cf4 '<p>'\cf7 .\cf6 $data\cf7 ->\cf6 nom_article\cf7 .\cf4 '  '\cf7 .\cf6 $data\cf7 ->\cf6 price_ht_article\cf7 .\cf4 '  '\cf7 .\cf6 $data\cf7 ->\cf6 type_article\cf7 .\cf4 '  </p>'\cf5 ;\
		\}\
\} \cf2 catch \cf5 (\cf11 Exception \cf6 $e\cf5 )\{\
	\cf2 die\cf5 (\cf4 "Error : "\cf7 .\cf6 $e\cf7 ->getMessage\cf5 ()\cf7 .\cf6 $e\cf7 ->getCode\cf5 ());\
\}\
\
\
}