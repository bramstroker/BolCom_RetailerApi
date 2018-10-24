<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound\Query;

final class GetDeliveryWindow extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Inbound\Query\GetDeliveryWindows';

    protected $messageName = self::MESSAGE_NAME;

    public function deliveryDate(): ?\BolCom\RetailerApi\Model\DateTime
    {
        return isset($this->payload['deliveryDate']) ? \BolCom\RetailerApi\Model\DateTime::fromString($this->payload['deliveryDate']) : null;
    }

    public function itemsToSend(): ?\BolCom\RetailerApi\Model\Inbound\ItemsToSend
    {
        return isset($this->payload['itemsToSend']) ? \BolCom\RetailerApi\Model\Inbound\ItemsToSend::fromScalar($this->payload['itemsToSend']) : null;
    }

    public static function with(?\BolCom\RetailerApi\Model\DateTime $deliveryDate, ?\BolCom\RetailerApi\Model\Inbound\ItemsToSend $itemsToSend): GetDeliveryWindow
    {
        return new self([
            'deliveryDate' => null === $deliveryDate ? null : $deliveryDate->toString(),
            'itemsToSend' => null === $itemsToSend ? null : $itemsToSend->toScalar(),
        ]);
    }

    protected function setPayload(array $payload): void
    {
        if (isset($payload['deliveryDate']) && ! \is_string($payload['deliveryDate'])) {
            throw new \InvalidArgumentException("Value for 'deliveryDate' is not a string in payload");
        }

        if (isset($payload['itemsToSend']) && ! \is_int($payload['itemsToSend'])) {
            throw new \InvalidArgumentException("Value for 'itemsToSend' is not a int in payload");
        }

        $this->payload = $payload;
    }
}
