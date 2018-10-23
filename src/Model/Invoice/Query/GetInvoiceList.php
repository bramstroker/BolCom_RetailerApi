<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Invoice\Query;

final class GetInvoiceList extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Invoice\Query\GetInvoiceList';

    protected $messageName = self::MESSAGE_NAME;

    public function period(): ?\BolCom\RetailerApi\Model\Invoice\Period
    {
        return isset($this->payload['period']) ? \BolCom\RetailerApi\Model\Invoice\Period::fromString($this->payload['period']) : null;
    }

    public static function with(?\BolCom\RetailerApi\Model\Invoice\Period $period): GetInvoiceList
    {
        return new self([
            'period' => null === $period ? null : $period->toString(),
        ]);
    }

    protected function setPayload(array $payload): void
    {
        if (isset($payload['period']) && ! \is_string($payload['period'])) {
            throw new \InvalidArgumentException("Value for 'period' is not a string in payload");
        }

        $this->payload = $payload;
    }
}