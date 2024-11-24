<?php

/**
 * This file is part of kaufland.
 * Copyright © 2024 Ján Forgáč <forgac@artfocus.cz>
 */

declare(strict_types=1);

namespace Hitmeister\Component\Api\Transfers;

class ShippingGroupRegionTransfer extends AbstractTransfer
{

	/**
	 * @return array
	 */
	public function getProperties()
	{
		static $properties = array (
			'countries' =>
				array (
					'embedded' => false,
					'is_multiple' => true,
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
		barDump($data);
		return AbstractTransfer::makeTransfer(ShippingGroupRegionTransfer::class, $data);
	}

}
