<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 *
 * @property int $status
 * @property string $currency
 * @property int $id_unit
 * @property string $note
 * @property string $condition
 * @property int $listing_price
 * @property int $minimum_price
 * @property int $price
 * @property string $id_offer
 * @property int $id_product
 * @property int $id_shipping_group
 * @property int $id_warehouse
 * @property int $amount
 * @property string $date_inserted_iso
 * @property string $date_lastchange_iso
 * @property int $handling_time
 * @property int $shipping_rate
 * @property string $storefront
 * @property int $transport_time_min
 * @property int $transport_time_max
 * @property string $fulfillment_type
 * @property string $vat_indicator
 *
 *
 */
class UnitTransfer extends AbstractTransfer
{
    /**
     * @return array
     */
    public function getProperties()
    {
        static $properties = array (
  'status' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'currency' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'id_unit' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'note' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'condition' =>
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
  'price' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'id_offer' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'id_product' =>
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
  'amount' =>
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
  'handling_time' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'shipping_rate' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'storefront' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'transport_time_min' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'transport_time_max' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'fulfillment_type' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'vat_indicator' =>
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
     * @return UnitTransfer
     */
    public static function make(array $data)
    {
        return AbstractTransfer::makeTransfer('Hitmeister\Component\Api\Transfers\UnitTransfer', $data);
    }
}
