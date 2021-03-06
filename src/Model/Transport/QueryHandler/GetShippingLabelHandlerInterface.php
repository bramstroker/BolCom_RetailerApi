<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Transport\QueryHandler;

use BolCom\RetailerApi\Model\ShippingLabel\ShippingLabelPdf;
use BolCom\RetailerApi\Model\Transport\Query\GetShippingLabel;

interface GetShippingLabelHandlerInterface
{
    public function __invoke(GetShippingLabel $shippingLabel): ShippingLabelPdf;
}
