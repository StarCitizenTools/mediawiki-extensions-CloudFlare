<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Cloudflare' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Cloudflare'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for Cloudflare extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Cloudflare extension requires MediaWiki 1.35+' );
}
