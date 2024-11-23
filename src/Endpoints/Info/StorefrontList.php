<?php

namespace Hitmeister\Component\Api\Endpoints\Info;

use Hitmeister\Component\Api\Endpoints\AbstractEndpoint;
use Hitmeister\Component\Api\Endpoints\Traits\EmptyParamWhiteList;
use Hitmeister\Component\Api\Endpoints\Traits\RequestGet;

/**
 * Class Ping
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Endpoints\Status
 * @author   Jan Forgac
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class StorefrontList extends AbstractEndpoint
{
	use RequestGet;
	use EmptyParamWhiteList;

	/**
	 * {@inheritdoc}
	 */
	public function getURI()
	{
		return 'info/storefront/';
	}
}
