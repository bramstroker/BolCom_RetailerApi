<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound\Query;

final class GetFbbTransporterList extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Inbound\Query\GetFbbTransporterList';

    protected $messageName = self::MESSAGE_NAME;

    protected function setPayload(array $payload)
    {
        $this->payload = $payload;
    }
}
