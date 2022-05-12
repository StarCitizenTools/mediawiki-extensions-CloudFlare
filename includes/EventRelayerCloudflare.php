<?php
/**
 * Cloudflare EventRelayerCloudflare
 *
 * @file
 * @ingroup Extensions
 * @license GPL-3.0-or-later
 */

declare( strict_types=1 );

namespace MediaWiki\Extension\Cloudflare;

use EventRelayer;

class EventRelayerCloudflare extends EventRelayer {
	/**
	 * @param string $channel
	 * @param array $events
	 * @return bool
	 */
	protected function doNotify( $channel, array $events ) {
		if ( $channel === 'cdn-url-purges' ) {
			// Retrieve a list of URLs here
			// Then pass over to Cloudflare to purge
			// $event['url'] - URL to purge
			// $event['timestamp'] - Timestamp of the object
			// See:
			// https://github.com/wikimedia/mediawiki/blob/master/includes/deferred/CdnCacheUpdate.php#L112-L127
			// https://phabricator.wikimedia.org/T216225
			// https://doc.wikimedia.org/mediawiki-core/master/php/classEventRelayer.html
		}

		return true;
	}
}
