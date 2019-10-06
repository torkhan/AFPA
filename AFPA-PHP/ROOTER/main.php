<?php
//	require 'vendor/autoload.php';
//	require 'src/elements/head.php';
//	$router = new AltoRouter();
//
//	$router->map( 'GET', '/', 'home', 'home' );
//
//	$router->map( 'GET', '/produits', 'produits', 'produits' );
//
//	$router->map( 'GET', '/produits/[*:slug]-[i:id]', 'produit', 'listProduits' );
//
//	$match = $router->match();
//	if ( $match !== null ) {
//		require 'src/elements/head.php';
//		if ( is_countable( $match['target'] ) ) {
//			call_user_func_array( $match['target'], $match['params'] );
//		} else {
//			require 'src/home.php';
//		}
//		require 'src/elements/footer.php';
//	}
//	dump( $router->getRoutes() );
//	dump( $match['target'] );
//	dump( $match['params'] );
//	dump( $match['name'] );
//
//	require '../src/elements/footer.php';
//
//
//
