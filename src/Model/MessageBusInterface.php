<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Model;

interface MessageBusInterface
{
    public function dispatch($message, string $clientName = ClientPoolInterface::DEFAULT_CLIENT_NAME);
}
