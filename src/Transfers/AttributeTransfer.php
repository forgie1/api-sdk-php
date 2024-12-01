<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $explanation
 * @property boolean $is_multiple
 * @property string $seller_instructions
 * @property boolean $is_sharedset
 * @property string $type
 *
 *
 */
class AttributeTransfer extends AbstractTransfer
{
    /**
     * @return array
     */
    public function getProperties()
    {
        static $properties = array (
  'id' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'name' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'title' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'explanation' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'is_multiple' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'seller_instructions' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'is_sharedset' =>
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'type' => 
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
     * @return AttributeTransfer
     */
    public static function make(array $data)
    {
        return AbstractTransfer::makeTransfer('Hitmeister\Component\Api\Transfers\AttributeTransfer', $data['data']);
    }
}
