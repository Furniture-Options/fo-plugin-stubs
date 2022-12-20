<?php
// You'll need the Composer Autoloader.
require 'vendor/autoload.php';

if ( ! isset( $argv[1] ) ) {
	die( "\n" . 'You must provide the WordPress plugins directory path.'
		. "\n\n"
		. "\t" . 'php generate.php [wp_plugin_path]'
		. "\n\n"
    	);
}

$plugins_path = realpath( $argv[1] );

if ( ! is_dir( $plugins_path ) ) {
	die( "\n" . $argv[1] . ' does not exist.' );
}

// You may alias the classnames for convenience.

use StubsGenerator\StubsGenerator;
use Symfony\Component\Finder\Finder;


// First, instantiate a `StubsGenerator\StubsGenerator`.
$generator = new StubsGenerator();

$finder = new Finder();
$finder->directories()
	  ->name('fo-*')
	  ->in($plugins_path);

if ( $finder->hasResults() ) {
	foreach ($finder as $dir) {
		$absolute_dir_path = $dir->getRealPath();
		$plugin = $dir->getFilename();

		echo "{$absolute_dir_path} : {$plugin}\n";

		// Create a `StubsGenerator\Finder` which contains
		// the set of files you wish to generate stubs for.
		$plugin_finder = Finder::create()->in($absolute_dir_path)->ignoreVCSIgnored(true);

		// Now use the `StubsGenerator::generate()` method,
		// which will return a `StubsGenerator\Result` instance.
		$result = $generator->generate($plugin_finder);

		// Save stubs to file.
		file_put_contents( $plugin . '.php', $result->prettyPrint() );

	}
}
exit;

