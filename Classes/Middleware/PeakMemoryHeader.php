<?php

namespace Lolli\PeakMemory\Middleware;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Http\ApplicationType;

class PeakMemoryHeader implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);
        $applicationType = ApplicationType::fromRequest($request);
        if (($applicationType->isBackend() && (($GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] ?? false) === true))
            || ($applicationType->isFrontend() && (($GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] ?? false) === true))
        ) {
            return $response->withHeader('X-TYPO3-PHP-peak-memory', (string)memory_get_peak_usage());
        }
        return $response;
    }
}
