<?php

namespace Hitmeister\Component\Api\Namespaces;

use Hitmeister\Component\Api\Endpoints\ProductDataStatus\Get;
use Hitmeister\Component\Api\Namespaces\Traits\PerformWithId;
use Hitmeister\Component\Api\Transfers\ProductDataStatusTransfer;

/**
 * Class ProductDataStatusNamespace
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Namespaces
 * @author   Julian Ecknig <julian.ecknig@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class ProductDataStatusNamespace extends AbstractNamespace
{
	use PerformWithId;

	/**
	 * @param string   $ean
	 * @param string $locale
	 * @return ProductDataStatusTransfer|null
	 */
	public function get(string $ean, string $locale)
	{
		$endpoint = new Get($this->getTransport());
		$endpoint->setParams(['locale' => $locale]);
		$result = $this->performWithId($endpoint, $ean);
		
		return $result ? ProductDataStatusTransfer::make($result) : null;
	}
}
