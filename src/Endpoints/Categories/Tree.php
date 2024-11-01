<?php

namespace Hitmeister\Component\Api\Endpoints\Categories;

use Hitmeister\Component\Api\Endpoints\AbstractEndpoint;
use Hitmeister\Component\Api\Endpoints\Traits\RequestGet;

class Tree extends AbstractEndpoint
{
	use RequestGet;

	/**
	 * {@inheritdoc}
	 */
	public function getParamWhiteList()
	{
		return ['storefront', 'locale'];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getURI()
	{
		return 'categories/tree';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getApiLimit()
	{
		return null;
	}

}
