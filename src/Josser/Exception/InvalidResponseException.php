<?php

/*
 * This file is part of the Josser package.
 *
 * (C) Alan Gabriel Bem <alan.bem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Josser\Exception;

use Josser\Exception\JosserException;
use Josser\Exception\RpcFaultException;

/**
 * Transport failure exception.
 *
 * @author Alan Gabriel Bem <alan.bem@gmail.com>
 */
class InvalidResponseException extends \RuntimeException implements JosserException
{
}