<?php

namespace Hitmeister\Component\Api\Exceptions;

/**
 * Class TransportException
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Exceptions
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class TransportException extends \Exception implements ApiException
{
    /** @var  string */
    protected $requestId = '';

	protected $errors = [];

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

	/**
	 * @return array
	 */
	public function getErrors(): array
	{
		return $this->errors;
	}

	/**
	 * @param string $errors
	 * @return $this
	 */
	public function setErrors(array $errors)
	{
		$this->errors =$errors;
		return $this;
	}

}
