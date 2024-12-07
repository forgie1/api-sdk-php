<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 *
 * @property int $id_unit
 * @property int $id_product // * required, or ean
 * @property int $handling_time // * required, int 0 - 100, handling time
 * @property string $vat_indicator // [ standard_rate, reduced_rate_1, reduced_rate_2, super_reduced_rate, zero_rate]
 * @property string $id_shipping_group
 * @property string $id_warehouse
 * @property string $condition // USED___ACCEPTABLE, USED___VERY_GOOD, USED___AS_NEW, USED___GOOD, NEW, REFURBISHED___VERY_GOOD, REFURBISHED___GOOD, REFURBISHED___AS_NEW, REFURBISHED___ACCEPTABLE, BULK_WARE
 * @property int $amount // Amount of available Units [default: 1, minimum: 0]
 * @property int $listing_price // required, Listing price, in integral cents of the storefront's currency (CZK for cz, EUR for de, sk, at and PLN for pl). Minimum 1 cent, maximum differs by storefront (25 million CZK, 1 million EUR or 4.5 million PLN)
 * @property int $minimum_price
 * @property string $note
 * @property int $shipping_rate
 * @property string $date_inserted_iso
 * @property string $date_lastchange_iso
 *
 *
 */
class UnitUpdateTransfer extends AbstractTransfer
{
	/**
	 * @return array
	 */
	public function getProperties()
	{
		static $properties = array (
			'id_unit' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'id_product' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'handling_time' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'vat_indicator' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'id_shipping_group' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'id_warehouse' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'condition' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'amount' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'listing_price' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'minimum_price' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'note' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'shipping_rate' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'date_inserted_iso' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
			'date_lastchange_iso' =>
				array (
					'embedded' => false,
					'is_multiple' => false,
				),
		);
		return $properties;
	}

	/**
	 * @param array $data
	 *
	 * @return UnitAddTransfer
	 */
	public static function make(array $data)
	{
		return AbstractTransfer::makeTransfer('Hitmeister\Component\Api\Transfers\UnitUpdateTransfer', $data);
	}
}
