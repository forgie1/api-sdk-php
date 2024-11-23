<?php

/**
 * This file is part of kaufland.
 * Copyright © 2024 Ján Forgáč <forgac@artfocus.cz>
 */

declare(strict_types=1);

namespace Hitmeister\Component\Api\Namespaces;

use Hitmeister\Component\Api\Endpoints\Info\StorefrontList;
use Hitmeister\Component\Api\Helper\Response;
use Hitmeister\Component\Api\Transfers\InfoStorefrontListTransfer;

class InfoNamespace extends AbstractNamespace
{

	/**
	 * @return InfoStorefrontListTransfer
	 */
	public function storefrontList()
	{
		static $storefronts = null;
		if (!isset($storefronts)) {
			$endpoint = new StorefrontList($this->getTransport());
			$result = $endpoint->performRequest();

			Response::checkBody($result);
			$storefronts = InfoStorefrontListTransfer::make($result['json']);
		}

		return $storefronts;
	}

}
