<?php

require __DIR__ . '/../vendor/autoload.php';

use StubsGenerator\StubsGenerator;
use Symfony\Component\Finder\Finder;

if ( ! isset( $argv[1] ) ) {
	die(
		"\n" . 'You must provide the full path to the WordPress plugins directory.'
		. "\n\n"
		. "\t" . 'php generate.php [wp_plugin_path]'
		. "\n\n"
	);
}

$plugins_path = realpath( $argv[1] );

if ( ! is_dir( $plugins_path ) ) {
	die( "\n" . $argv[1] . ' does not exist.' );
}


// First, instantiate a `StubsGenerator\StubsGenerator`.
$generator = new StubsGenerator();

// generate stub files for all FO plugins
$finder = new Finder();
$finder->directories()
	   ->in( $plugins_path )
	   ->name( 'fo-*' )
	   ->notName( '*vendor*' )
	   ->ignoreVCSIgnored( true );

if ( $finder->hasResults() ) {
	foreach ( $finder as $dir ) {
		$absolute_dir_path = $dir->getRealPath();
		$plugin            = $dir->getFilename();

		echo "{$absolute_dir_path} : {$plugin}\n";

		// Create a `StubsGenerator\Finder` which contains
		// the set of files you wish to generate stubs for.
		$plugin_finder = Finder::create()->in( $absolute_dir_path )->ignoreVCSIgnored( true )->notName( 'vendor' );

		// Now use the `StubsGenerator::generate()` method,
		// which will return a `StubsGenerator\Result` instance.
		$result = $generator->generate( $plugin_finder );

		// Save stubs to file.
		file_put_contents( __DIR__ . '/../stubs/' . $plugin . '.php', $result->prettyPrint() );
	}
}


// Get some files from theme */
$theme_dir    = realpath( $plugins_path . '/../themes/fo' );
$theme_finder = new Finder();

$theme_finder->files()
			 ->in( $theme_dir )
			 ->name( array( 'functions.php', 'woocommerce.php', 'admin.php' ) )
			 ->ignoreVCSIgnored( true );

// Now use the `StubsGenerator::generate()` method,
// which will return a `StubsGenerator\Result` instance.
$result = $generator->generate( $theme_finder );

// Save stubs to file.
file_put_contents( 'stubs/fo-wp-theme.php', $result->prettyPrint() );


// generate stub files for additional plugins
$addl_plugins = array(
	'admin-columns-pro',
	'woocommerce-subscriptions',
	'woocommerce-avatax',
	'woocommerce-composite-products',
	'woocommerce-product-bundles',
	'woocommerce-store-exporter-deluxe',
	'woocommerce-gateway-paypal-powered-by-braintree',
	'automatewoo',
	'woocommerce-all-products-for-subscriptions',
);

$finder = new Finder();
$finder->directories()
	->in( $plugins_path )
	->name( $addl_plugins )
	->ignoreVCSIgnored( true )
	->notName( '*vendor*' );

if ( $finder->hasResults() ) {
	foreach ( $finder as $dir ) {
		$absolute_dir_path = $dir->getRealPath();
		$plugin            = $dir->getFilename();

		echo "{$absolute_dir_path} : {$plugin}\n";

		// Create a `StubsGenerator\Finder` which contains
		// the set of files you wish to generate stubs for.
		$plugin_finder = Finder::create()->in( $absolute_dir_path )->ignoreVCSIgnored( true )->notName( '*vendor*' );

		// Now use the `StubsGenerator::generate()` method,
		// which will return a `StubsGenerator\Result` instance.
		$result = $generator->generate( $plugin_finder );

		// Save stubs to file.
		file_put_contents( __DIR__ . '/../stubs/' . $plugin . '.php', $result->prettyPrint() );
	}
}
