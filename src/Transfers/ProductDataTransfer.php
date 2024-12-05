<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 *
 * @property array $ean
 * @property array $title
 * @property array $category
 * @property array $additional_categories
 * @property array $description
 * @property array $short_description
 * @property array $mpn
 * @property array $list_price
 * @property array $picture
 * @property array $additional_attributes
 *
 *
 */
class ProductDataTransfer extends AbstractTransfer
{
    /**
     * @return array
     */
    public function getProperties()
    {
        static $properties = array (
  'ean' => 
  array (
    'embedded' => false,
    'is_multiple' => true,
  ),
  'attributes' =>
  array (
    'embedded' => false,
    'is_multiple' => true,
    'type' => 'Hitmeister\\Component\\Api\\Transfers\\AdditionalAttributeTransfer',
  ),
);
        return $properties;
    }

	public function __set($name, $value)
	{
		if ($name === 'ean') {
			parent::__set($name, $value);
		} else {
			$this->addAttribute($name, AdditionalAttributeTransfer::makeTransfer(AdditionalAttributeTransfer::class, ['value' => $value]));
		}
	}

	public function __get($name)
	{
		if ($name === 'ean') {
			return parent::__get($name);
		} else {
			return $this->getAttribute($name);
		}
	}

	/**
     * @param array $data
     *
     * @return ProductDataTransfer
     */
    public static function make(array $data)
    {
        return AbstractTransfer::makeTransfer('Hitmeister\Component\Api\Transfers\ProductDataTransfer', $data);
    }
}
