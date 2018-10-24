<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound\Query;

final class GetPackingList extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Inbound\Query\GetPackingList';

    protected $messageName = self::MESSAGE_NAME;

    public function inboundId(): \BolCom\RetailerApi\Model\Inbound\InboundId
    {
        return \BolCom\RetailerApi\Model\Inbound\InboundId::fromScalar($this->payload['inboundId']);
    }

    public static function with(\BolCom\RetailerApi\Model\Inbound\InboundId $inboundId): GetPackingList
    {
        return new self([
            'inboundId' => $inboundId->toScalar(),
        ]);
    }

    protected function setPayload(array $payload): void
    {
        if (! isset($payload['inboundId']) || ! \is_int($payload['inboundId'])) {
            throw new \InvalidArgumentException("Key 'inboundId' is missing in payload or is not a int");
        }

        $this->payload = $payload;
    }
}
