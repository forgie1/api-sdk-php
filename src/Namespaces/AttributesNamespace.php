<?php

namespace Hitmeister\Component\Api\Namespaces;

use Hitmeister\Component\Api\Cursor;
use Hitmeister\Component\Api\Endpoints\Attributes\Find;
use Hitmeister\Component\Api\Endpoints\Attributes\Get;
use Hitmeister\Component\Api\FindBuilder;
use Hitmeister\Component\Api\Namespaces\Traits\PerformWithId;
use Hitmeister\Component\Api\Transfers\AttributeTransfer;

/**
 * Class AttributesNamespace
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Namespaces
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class AttributesNamespace extends AbstractNamespace
{
	use PerformWithId;

	/**
	 * @param int $id
	 * @return AttributeTransfer|null
	 */
	public function get($id)
	{
		$endpoint = new Get($this->getTransport());
		$endpoint->setParams(['storefront' => $this->storefront]);
		$result = $this->performWithId($endpoint, $id);
		return $result ? AttributeTransfer::make($result) : null;
	}

	/**
	 * @param ?string $q
	 * @param ?int    $limit
	 * @param ?int    $offset
	 * @param ?string $locale
	 * @return Cursor|AttributeTransfer[]
	 */
	public function find($q = null, $limit = null, $offset = null, string $locale = null)
	{
		return $this->buildFind()
			->addParam('q', $q)
			->setLimit($limit)
			->setOffset($offset)
			->addParam('locale', $locale)
			->find();
	}

	public function buildFind()
	{
		$endpoint = new Find($this->getTransport());
		$builder = new FindBuilder($endpoint, AttributeTransfer::class);
		$builder->addParam('storefront', $this->storefront);
		return $builder;
	}

}
