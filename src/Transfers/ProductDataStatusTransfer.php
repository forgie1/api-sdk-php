<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 *
 * @property bool $product_ready
 * @property string $product_not_ready_reason
 * @property int $id_product
 * @property float $product_quality
 * @property array $missing_attributes
 * @property array $min_one_missing_attributes
 * @property string $update_status
 * @property string $update_fail_reason
 * @property array|ProductDataStatusAttributeValueTransfer[] $attribute_values
 *
 *
 */
class ProductDataStatusTransfer extends AbstractTransfer
{
    /**
     * @return array
     */
    public function getProperties()
    {
        static $properties = array (
  'product_ready' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'product_not_ready_reason' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'id_product' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'product_quality' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'missing_attributes' => 
  array (
    'embedded' => false,
    'is_multiple' => true,
  ),
  'min_one_missing_attributes' => 
  array (
    'embedded' => false,
    'is_multiple' => true,
  ),
  'update_status' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'update_fail_reason' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'attribute_values' => 
  array (
    'embedded' => false,
    'is_multiple' => true,
    'type' => 'Hitmeister\\Component\\Api\\Transfers\\ProductDataStatusAttributeValueTransfer',
  ),
);
        return $properties;
    }

    /**
     * @param array $data
     *
     * @return ProductDataStatusTransfer
     */
    public static function make(array $data)
    {
        return AbstractTransfer::makeTransfer('Hitmeister\Component\Api\Transfers\ProductDataStatusTransfer', $data['data'] ?? []);
    }
}
