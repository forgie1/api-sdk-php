<?php

namespace Hitmeister\Component\Api\Helper;

use Hitmeister\Component\Api\Endpoints\AbstractEndpoint;
use Hitmeister\Component\Api\Exceptions\ServerException;

/**
 * Class Response
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Helper
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class Response
{
	/**
	 * @param array $data
	 * @throws ServerException
	 */
	public static function checkBody(array &$data)
	{
		if (!isset($data['json'])) {
			throw new ServerException('Unexpected server response, body is empty.');
		}
	}

	/**
	 * @param array $data
	 * @return array
	 * @throws ServerException
	 */
	public static function extractCursorPosition(array &$data)
	{
		if (!isset($data['json']['pagination'])) {
			throw new ServerException('Response "pagination" is missing.');
		}
		if (!isset($data['json']['pagination']['offset'])) {
			throw new ServerException('Response "pagination->offset" is missing.');
		}
		if (!isset($data['json']['pagination']['limit'])) {
			throw new ServerException('Response "pagination->limit" is missing.');
		}
		if (!isset($data['json']['pagination']['total'])) {
			throw new ServerException('Response "pagination->total" is missing.');
		}

		return [
			'start' => (int)$data['json']['pagination']['offset'],
			'end' => (int)($data['json']['pagination']['offset'] + $data['json']['pagination']['limit']),
			'total' => (int)$data['json']['pagination']['total'],
		];
	}

	/**
	 * @param array  $data
	 * @param string $pattern
	 * @return int It is possible to have 0 value, this is an error
	 * @throws ServerException
	 */
	public static function extractId(array &$data, $pattern)
	{
		if (!isset($data['headers']['Location'][0])) {
			throw new ServerException('Response header "Location" is missing.');
		}

		$id = null;
		$count = sscanf($data['headers']['Location'][0], $pattern, $id);

		if (1 !== $count) {
			throw new ServerException(sprintf('Response header "Location" has wrong format. Expected "%s", got "%s".',
				$pattern, $data['headers']['Location'][0]));
		}

		return (int)$id;
	}
}
