<?php

namespace Hitmeister\Component\Api\Endpoints\Attributes;

use Hitmeister\Component\Api\Endpoints\AbstractEndpoint;
use Hitmeister\Component\Api\Endpoints\Interfaces\IdAware;
use Hitmeister\Component\Api\Endpoints\Traits\EmptyParamWhiteList;
use Hitmeister\Component\Api\Endpoints\Traits\RequestGet;
use Hitmeister\Component\Api\Endpoints\Traits\UriPatternId;

/**
 * Class Get
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Endpoints\Attributes
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class Get extends AbstractEndpoint implements IdAware
{

	use RequestGet;
	use UriPatternId;
	use EmptyParamWhiteList;

	public function getParamWhiteList()
	{
		return ['storefront'];
	}

	/**
	 * {@inheritdoc}
	 */
	protected function getUriPattern()
	{
		return 'attributes/%d';
	}
}
