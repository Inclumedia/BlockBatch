<?php
/**
 * BlockBatch extension by Leucosticte
 * URL: http://www.mediawiki.org/wiki/Extension:BlockBatch
 *
 * This program is free software. You can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */


/* Alert the user that this is not a valid entry point to MediaWiki if they try to access the
special pages file directly.*/

if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
		To install the RPED extension, put the following line in LocalSettings.php:
		require( "extensions/RPED/RPED.php" );
EOT;
	exit( 1 );
}

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'BlockBatch',
	'author' => 'Leucosticte',
	'url' => 'http://www.mediawiki.org/wiki/Extension:BlockBatch',
	'descriptionmsg' => 'blockbatch-desc',
	'version' => '1.0.1'
);

$wgAutoloadClasses[ 'SpecialBlockBatch' ] = __DIR__ . '/SpecialBlockBatch.php';
$wgExtensionMessagesFiles[ 'BlockBatch' ] = __DIR__ . '/BlockBatch.i18n.php';
$wgSpecialPages[ 'BlockBatch' ] = 'SpecialBlockBatch';
$wgGroupPermissions['bureaucrat']['blockbatch'] = true;