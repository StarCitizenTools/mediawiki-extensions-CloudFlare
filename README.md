# Cloudflare
![](https://github.com/StarCitizenTools/mediawiki-extensions-Cloudflare/workflows/MediaWiki%20CI/badge.svg)

## Features
* Purge thumbnails automatically
* Purge wiki page when `action=purge` is triggered.

## Requirements
* [MediaWiki](https://www.mediawiki.org) 1.35.2 or later

## Installation
You can get the extension via Git (specifying Cloudflare as the destination directory):

    git clone https://github.com/StarCitizenTools/mediawiki-extensions-Cloudflare.git Cloudflare

Or [download it as zip archive](https://github.com/StarCitizenTools/mediawiki-extensions-Cloudflare/archive/master.zip).

In either case, the "Cloudflare" extension should end up in the "extensions" directory 
of your MediaWiki installation. If you got the zip archive, you will need to put it 
into a directory called Cloudflare.

## Configurations
Name | Description | Values | Default
:--- | :--- | :--- | :---
`$wgCloudflareZoneId` | Your Cloudflare Zone ID | string | `null`
`$wgCloudflareApiToken` | Your Cloudflare API token | string | `null`
`$wgCloudflareAccountId` | Your Cloudflare account ID | string | `null`
