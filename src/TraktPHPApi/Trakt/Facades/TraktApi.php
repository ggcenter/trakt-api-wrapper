<?php

namespace TraktPHPApi\Trakt\Facades;
use Illuminate\Support\Facades\Facade;

class TraktApi extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'trakt';
	}
}