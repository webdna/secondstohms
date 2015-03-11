<?php
namespace Craft;

class SecondsToHmsPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Seconds To Hms');
	}

	function getVersion()
	{
		return '0.1';
	}

	function getDeveloper()
	{
		return 'webdna';
	}

	function getDeveloperUrl()
	{
		return 'http://webdna.co.uk';
	}

	public function addTwigExtension()
	{
	    Craft::import('plugins.secondstohms.twigextensions.SecondsToHmsTwigExtension');
	    return new SecondsToHmsTwigExtension();
	}
}