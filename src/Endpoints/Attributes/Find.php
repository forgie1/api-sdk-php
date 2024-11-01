<?php

namespace Hitmeister\Component\Api\Endpoints\Attributes;

use Hitmeister\Component\Api\Endpoints\AbstractEndpoint;
use Hitmeister\Component\Api\Endpoints\Traits\RequestGet;

class Find extends AbstractEndpoint
{
	use RequestGet;

	/**
	 * {@inheritdoc}
	 */
	public function getParamWhiteList()
	{
		return ['q', 'storefront', 'limit', 'offset', 'locale'];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getURI()
	{
		if (isset($this->getParams()['q'])) {
			return 'attributes/search';
		} else {
			return 'attributes/';
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function getApiLimit()
	{
		return 100;
	}

}
