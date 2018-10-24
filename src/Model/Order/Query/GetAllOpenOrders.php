<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order\Query;

final class GetAllOpenOrders extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Order\Query\GetAllOpenOrders';

    protected $messageName = self::MESSAGE_NAME;

    public function page(): int
    {
        return $this->payload['page'];
    }

    public function shipmentsMethod(): \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod
    {
        return \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod::fromName($this->payload['shipmentsMethod']);
    }

    public static function with(int $page, \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod $shipmentsMethod): GetAllOpenOrders
    {
        return new self([
            'page' => $page,
            'shipmentsMethod' => $shipmentsMethod->name(),
        ]);
    }

    protected function setPayload(array $payload): void
    {
        if (! isset($payload['page']) || ! \is_int($payload['page'])) {
            throw new \InvalidArgumentException("Key 'page' is missing in payload or is not a int");
        }

        if (! isset($payload['shipmentsMethod']) || ! \is_string($payload['shipmentsMethod'])) {
            throw new \InvalidArgumentException("Key 'shipmentsMethod' is missing in payload or is not a string");
        }

        $this->payload = $payload;
    }
}
