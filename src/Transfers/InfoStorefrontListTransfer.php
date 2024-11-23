<?php

/**
 * This file is part of kaufland.
 * Copyright © 2024 Ján Forgáč <forgac@artfocus.cz>
 */

declare(strict_types=1);

namespace Hitmeister\Component\Api\Transfers;

/**
 * @property array storefront
 */
class InfoStorefrontListTransfer extends AbstractTransfer
{

	/**
	 * @return array
	 */
	public function getProperties()
	{
		static $properties = array (
			'storefront' =>
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
	 * @return InfoStorefrontListTransfer
	 */
	public static function make(array $data)
	{
		return AbstractTransfer::makeTransfer(InfoStorefrontListTransfer::class, ['storefront' => $data['data']]);
	}

}
