<?php

namespace Hitmeister\Component\Api;

use Hitmeister\Component\Api\Namespaces\AttributesNamespace;
use Hitmeister\Component\Api\Namespaces\CategoriesNamespace;
use Hitmeister\Component\Api\Namespaces\ClaimMessagesNamespace;
use Hitmeister\Component\Api\Namespaces\ClaimsNamespace;
use Hitmeister\Component\Api\Namespaces\ImportFilesNamespace;
use Hitmeister\Component\Api\Namespaces\InfoNamespace;
use Hitmeister\Component\Api\Namespaces\ItemsNamespace;
use Hitmeister\Component\Api\Namespaces\OrdersNamespace;
use Hitmeister\Component\Api\Namespaces\OrderInvoicesNamespace;
use Hitmeister\Component\Api\Namespaces\OrderUnitsNamespace;
use Hitmeister\Component\Api\Namespaces\ProductDataNamespace;
use Hitmeister\Component\Api\Namespaces\ProductDataStatusNamespace;
use Hitmeister\Component\Api\Namespaces\ReportsNamespace;
use Hitmeister\Component\Api\Namespaces\ReturnsNamespace;
use Hitmeister\Component\Api\Namespaces\ReturnUnitsNamespace;
use Hitmeister\Component\Api\Namespaces\ShipmentsNamespace;
use Hitmeister\Component\Api\Namespaces\ShippingGroupsNamespace;
use Hitmeister\Component\Api\Namespaces\StatusNamespace;
use Hitmeister\Component\Api\Namespaces\SubscriptionsNamespace;
use Hitmeister\Component\Api\Namespaces\TicketMessagesNamespace;
use Hitmeister\Component\Api\Namespaces\TicketsNamespace;
use Hitmeister\Component\Api\Namespaces\UnitsNamespace;
use Hitmeister\Component\Api\Namespaces\WarehousesNamespace;
use Hitmeister\Component\Api\Transport\Transport;

/**
 * Class Client
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class Client
{
	const VERSION = '1.54.0';

	/** @var Transport */
	private $transport;

	/** @var AttributesNamespace */
	private $attributesNs;

	/** @var CategoriesNamespace */
	private $categoriesNs;

	/** @var ClaimMessagesNamespace */
	private $claimMessagesNs;

	/** @var ClaimsNamespace */
	private $claimsNs;

	/** @var ImportFilesNamespace */
	private $importFilesNs;

	/** @var ItemsNamespace */
	private $itemsNs;

	/** @var OrdersNamespace */
	private $ordersNs;

	/** @var OrderInvoicesNamespace */
	private $orderInvoicesNs;

	/** @var OrderUnitsNamespace */
	private $orderUnitsNs;

	/** @var ProductDataNamespace */
	private $productDataNs;

	/** @var ProductDataStatusNamespace */
	private $productDataStatusNs;

	/** @var ReportsNamespace */
	private $reportsNs;

	/** @var ReturnsNamespace */
	private $returnsNs;

	/** @var ReturnUnitsNamespace */
	private $returnUnitsNs;

	/** @var ShipmentsNamespace */
	private $shipmentsNs;

	/** @var ShippingGroupsNamespace */
	private $shippingGroupsNs;

	/** @var StatusNamespace */
	private $statusNs;

	/** @var InfoNamespace */
	private $infoNs;

	/** @var SubscriptionsNamespace */
	private $subscriptionsNs;

	/** @var TicketMessagesNamespace */
	private $ticketMessagesNs;

	/** @var TicketsNamespace */
	private $ticketsNs;

	/** @var WarehousesNamespace */
	private $warehousesNs;

	/** @var UnitsNamespace */
	private $unitsNs;

	/**
	 * @param Transport $transport
	 * @param ?string $storefront
	 */
	public function __construct(Transport $transport, string $storefront = null)
	{
		$this->transport = $transport;

		// Namespaces
		$this->attributesNs = new AttributesNamespace($this->transport, $storefront);
		$this->categoriesNs = new CategoriesNamespace($this->transport, $storefront);
		$this->claimMessagesNs = new ClaimMessagesNamespace($this->transport);
		$this->claimsNs = new ClaimsNamespace($this->transport, $storefront);
		$this->importFilesNs = new ImportFilesNamespace($this->transport, $storefront);
		$this->itemsNs = new ItemsNamespace($this->transport, $storefront);
		$this->ordersNs = new OrdersNamespace($this->transport, $storefront);
		$this->orderInvoicesNs = new OrderInvoicesNamespace($this->transport, $storefront);
		$this->orderUnitsNs = new OrderUnitsNamespace($this->transport, $storefront);
		$this->productDataNs = new ProductDataNamespace($this->transport, $storefront);
		$this->productDataStatusNs = new ProductDataStatusNamespace($this->transport, $storefront);
		$this->reportsNs = new ReportsNamespace($this->transport, $storefront);
		$this->returnsNs = new ReturnsNamespace($this->transport, $storefront);
		$this->returnUnitsNs = new ReturnUnitsNamespace($this->transport, $storefront);
		$this->shipmentsNs = new ShipmentsNamespace($this->transport, $storefront);
		$this->shippingGroupsNs = new ShippingGroupsNamespace($this->transport, $storefront);
		$this->statusNs = new StatusNamespace($this->transport, $storefront);
		$this->infoNs = new InfoNamespace($this->transport, $storefront);
		$this->subscriptionsNs = new SubscriptionsNamespace($this->transport, $storefront);
		$this->ticketMessagesNs = new TicketMessagesNamespace($this->transport, $storefront);
		$this->ticketsNs = new TicketsNamespace($this->transport, $storefront);
		$this->warehousesNs = new WarehousesNamespace($this->transport, $storefront);
		$this->unitsNs = new UnitsNamespace($this->transport, $storefront);
	}

	/**
	 * @return Transport
	 */
	public function getTransport()
	{
		return $this->transport;
	}

	/**
	 * @return AttributesNamespace
	 */
	public function attributes()
	{
		return $this->attributesNs;
	}

	/**
	 * @return CategoriesNamespace
	 */
	public function categories()
	{
		return $this->categoriesNs;
	}

	/**
	 * @return ClaimMessagesNamespace
	 */
	public function claimMessages()
	{
		return $this->claimMessagesNs;
	}

	/**
	 * @return ClaimsNamespace
	 */
	public function claims()
	{
		return $this->claimsNs;
	}

	/**
	 * @return ImportFilesNamespace
	 */
	public function importFiles()
	{
		return $this->importFilesNs;
	}

	/**
	 * @return ItemsNamespace
	 */
	public function items()
	{
		return $this->itemsNs;
	}

	/**
	 * @return OrdersNamespace
	 */
	public function orders()
	{
		return $this->ordersNs;
	}

	/**
	 * @return OrderInvoicesNamespace
	 */
	public function orderInvoices()
	{
		return $this->orderInvoicesNs;
	}

	/**
	 * @return OrderUnitsNamespace
	 */
	public function orderUnits()
	{
		return $this->orderUnitsNs;
	}

	/**
	 * @return ProductDataNamespace
	 */
	public function productData()
	{
		return $this->productDataNs;
	}

	/**
	 * @return ProductDataStatusNamespace
	 */
	public function productDataStatus()
	{
		return $this->productDataStatusNs;
	}

	/**
	 * @return ReportsNamespace
	 */
	public function reports()
	{
		return $this->reportsNs;
	}

	/**
	 * @return ReturnsNamespace
	 */
	public function returns()
	{
		return $this->returnsNs;
	}

	/**
	 * @return ReturnUnitsNamespace
	 */
	public function returnUnits()
	{
		return $this->returnUnitsNs;
	}

	/**
	 * @return ShipmentsNamespace
	 */
	public function shipments()
	{
		return $this->shipmentsNs;
	}

	/**
	 * @return ShippingGroupsNamespace
	 */
	public function shippingGroups()
	{
		return $this->shippingGroupsNs;
	}

	/**
	 * @return StatusNamespace
	 */
	public function status()
	{
		return $this->statusNs;
	}

	/**
	 * @return InfoNamespace
	 */
	public function info()
	{
		return $this->infoNs;
	}

	/**
	 * @return SubscriptionsNamespace
	 */
	public function subscriptions()
	{
		return $this->subscriptionsNs;
	}

	/**
	 * @return TicketMessagesNamespace
	 */
	public function ticketMessages()
	{
		return $this->ticketMessagesNs;
	}

	/**
	 * @return TicketsNamespace
	 */
	public function tickets()
	{
		return $this->ticketsNs;
	}

	/**
	 * @return WarehousesNamespace
	 */
	public function warehouses()
	{
		return $this->warehousesNs;
	}

	/**
	 * @return UnitsNamespace
	 */
	public function units()
	{
		return $this->unitsNs;
	}
}
