<?php
/**
 * CloudFlare EventRelayerCloudflare
 *
 * @file
 * @ingroup Extensions
 * @license GPL-3.0-or-later
 */

declare( strict_types=1 );

namespace MediaWiki\Extension\CloudFlare;

use EventRelayer;

class EventRelayerCloudflare extends EventRelayer {
	/**
	 * @param string $channel
	 * @param array $events
	 * @return bool
	 */
	protected function doNotify( $channel, array $events ) {
		if( $channel === 'cdn-url-purges' ){
			// Retrieve a list of URLs here
			// Then pass over to Cloudflare to purge
		}

		return true;
	}
}