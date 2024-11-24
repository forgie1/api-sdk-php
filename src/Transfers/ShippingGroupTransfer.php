<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 *
 * @property string $name
 * @property string $currency
 * @property int $id_shipping_group
 * @property bool $is_default
 * @property string $type
 * @property string $storefront
 * @property ShippingGroupRegionTransfer[] $regions
 *
 *
 */
class ShippingGroupTransfer extends AbstractTransfer
{
    /**
     * @return array
     */
    public function getProperties()
    {
        static $properties = array (
  'name' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'currency' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'id_shipping_group' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'is_default' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'type' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'storefront' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'regions' =>
  array (
    'embedded' => false,
    'is_multiple' => true,
	'type' => ShippingGroupRegionTransfer::class
  ),
);
        return $properties;
    }

    /**
     * @param array $data
     *
     * @return ShippingGroupTransfer
     */
    public static function make(array $data)
    {
        return AbstractTransfer::makeTransfer(ShippingGroupTransfer::class, $data['json']);
    }
}
