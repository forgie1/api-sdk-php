<?php

namespace Hitmeister\Component\Api\Namespaces;

use Hitmeister\Component\Api\Cursor;
use Hitmeister\Component\Api\Endpoints\Units\Delete;
use Hitmeister\Component\Api\Endpoints\Units\Find;
use Hitmeister\Component\Api\Endpoints\Units\Get;
use Hitmeister\Component\Api\Endpoints\Units\Post;
use Hitmeister\Component\Api\Endpoints\Units\Update;
use Hitmeister\Component\Api\Exceptions\InvalidArgumentException;
use Hitmeister\Component\Api\Exceptions\ResourceNotFoundException;
use Hitmeister\Component\Api\Exceptions\ServerException;
use Hitmeister\Component\Api\FindBuilder;
use Hitmeister\Component\Api\Helper\Response;
use Hitmeister\Component\Api\Namespaces\Traits\PerformWithId;
use Hitmeister\Component\Api\Transfers\UnitAddTransfer;
use Hitmeister\Component\Api\Transfers\UnitSellerTransfer;
use Hitmeister\Component\Api\Transfers\UnitTransfer;
use Hitmeister\Component\Api\Transfers\UnitUpdateTransfer;
use Hitmeister\Component\Api\Transfers\UnitWithEmbeddedTransfer;

/**
 * Class UnitsNamespace
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Namespaces
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class UnitsNamespace extends AbstractNamespace
{
	use PerformWithId;

	/**
	 * @param int        $idItem
	 * @param int|string $idOffer
	 * @param string[]   $embedded
	 * @param int        $limit
	 * @param int        $offset
	 * @return Cursor|UnitSellerTransfer[]
	 */
	public function findByIdItem($idItem, $idOffer = null, $embedded = null, $limit = 30, $offset = 0)
	{
		return $this->buildFind()
			->addParam('id_offer', $idOffer)
			->addParam('id_item', $idItem)
			->addParam('embedded', $embedded)
			->setLimit($limit)
			->setOffset($offset)
			->find();
	}

	/**
	 * @param string     $ean
	 * @param int|string $idOffer
	 * @param string[]   $embedded
	 * @param int        $limit
	 * @param int        $offset
	 * @return Cursor|UnitSellerTransfer[]
	 */
	public function findByEan($ean, $idOffer = null, $embedded = null, $limit = 30, $offset = 0)
	{
		return $this->buildFind()
			->addParam('id_offer', $idOffer)
			->addParam('ean', $ean)
			->addParam('embedded', $embedded)
			->setLimit($limit)
			->setOffset($offset)
			->find();
    }
    
	/**
	 * @param int|string $idOffer
	 * @param string[]   $embedded
	 * @param int        $limit
	 * @param int        $offset
	 * @return Cursor|UnitSellerTransfer[]
	 */
	public function findByIdOffer($idOffer, $embedded = null, $limit = 30, $offset = 0)
	{
		return $this->buildFind()
			->addParam('id_offer', $idOffer)
			->addParam('embedded', $embedded)
			->setLimit($limit)
			->setOffset($offset)
			->find();
	}    

	/**
	 * @return FindBuilder
	 */
	public function buildFind()
	{
		$endpoint = new Find($this->getTransport());
		$endpoint->setParams(['storefront' => $this->storefront]);
		return new FindBuilder($endpoint, '\Hitmeister\Component\Api\Transfers\UnitSellerTransfer');
	}

	/**
	 * @param int   $id
	 * @param array $embedded
	 * @return UnitTransfer|null
	 */
	public function get($id, array $embedded = [])
	{
		$endpoint = new Get($this->getTransport());

		// Ask for embedded fields
		if (!empty($embedded)) {
			$params = ['embedded' => $embedded];
		}
		$endpoint->setParams(['storefront' => $this->storefront] + ($params ?? []));

		$result = $this->performWithId($endpoint, $id);

		return $result ? UnitTransfer::make($result['data']) : null;
	}

	/**
	 * @param array|UnitAddTransfer $data
	 * @return ?UnitTransfer
	 *
	 * @throws InvalidArgumentException
	 * @throws ServerException
	 */
	public function post($data)
	{
		if (!$data instanceof UnitAddTransfer) {
			if (!is_array($data)) {
				throw new InvalidArgumentException('Data argument should be an array of instance of UnitAddTransfer');
			}
			$data = UnitAddTransfer::make($data);
		}

		$endpoint = new Post($this->getTransport());
		$endpoint->setParams(['storefront' => $this->storefront]);
		$endpoint->setTransfer($data);

		try {
			$result = $endpoint->performRequest();
		} catch (ResourceNotFoundException $e) {
			return null;
		}

		return UnitTransfer::make($result['json']['data']);
	}

	/**
	 * @param int                      $id
	 * @param array|UnitUpdateTransfer $data
	 * @return ?UnitTransfer
	 *
	 * @throws InvalidArgumentException
	 */
	public function update($id, $data)
	{
		if (!$data instanceof UnitUpdateTransfer) {
			if (!is_array($data)) {
				throw new InvalidArgumentException('Data argument should be an array of instance of UnitUpdateTransfer');
			}
			$data = UnitUpdateTransfer::make($data);
		}

		$endpoint = new Update($this->getTransport());
		$endpoint->setParams(['storefront' => $this->storefront]);
		$endpoint->setId($id);
		$endpoint->setTransfer($data);

		try {
			$result = $endpoint->performRequest();
		} catch (ResourceNotFoundException $e) {
			return null;
		}

		return UnitTransfer::make($result['json']['data']);
	}

	/**
	 * @param int $id
	 * @return bool
	 */
	public function delete($id)
	{
		$endpoint = new Delete($this->getTransport());
		$endpoint->setParams(['storefront' => $this->storefront]);
		$endpoint->setId($id);

		try {
			$result = $endpoint->performRequest();
		} catch (ResourceNotFoundException $e) {
			return false;
		}

		return $result['status'] == 204;
	}
}
