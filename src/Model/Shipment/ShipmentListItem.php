<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Shipment;

final class ShipmentListItem
{
    private $shipmentId;
    private $shipmentDate;
    private $shipmentReference;
    private $shipmentItems;

    /**
     * @param \BolCom\RetailerApi\Model\Shipment\ShipmentId $shipmentId
     * @param \BolCom\RetailerApi\Model\DateTime $shipmentDate
     * @param string $shipmentReference
     * @param \BolCom\RetailerApi\Model\Shipment\ShipmentItemListItem[]|null $shipmentItems
     */
    public function __construct(ShipmentId $shipmentId, \BolCom\RetailerApi\Model\DateTime $shipmentDate, string $shipmentReference = null, array $shipmentItems)
    {
        $this->shipmentId = $shipmentId;
        $this->shipmentDate = $shipmentDate;
        $this->shipmentReference = $shipmentReference;
            $this->shipmentItems = [];
            foreach ($shipmentItems as $__value) {
                if (! $__value instanceof \BolCom\RetailerApi\Model\Shipment\ShipmentItemListItem) {
                    throw new \InvalidArgumentException('shipmentItems expected an array of BolCom\RetailerApi\Model\Shipment\ShipmentItemListItem');
                }
                $this->shipmentItems[] = $__value;
            }
    }

    public function shipmentId(): ShipmentId
    {
        return $this->shipmentId;
    }

    public function shipmentDate(): \BolCom\RetailerApi\Model\DateTime
    {
        return $this->shipmentDate;
    }

    public function shipmentReference()
    {
        return $this->shipmentReference;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Shipment\ShipmentItemListItem[]
     */
    public function shipmentItems(): array
    {
        return $this->shipmentItems;
    }

    public function withShipmentId(ShipmentId $shipmentId): ShipmentListItem
    {
        return new self($shipmentId, $this->shipmentDate, $this->shipmentReference, $this->shipmentItems);
    }

    public function withShipmentDate(\BolCom\RetailerApi\Model\DateTime $shipmentDate): ShipmentListItem
    {
        return new self($this->shipmentId, $shipmentDate, $this->shipmentReference, $this->shipmentItems);
    }

    public function withShipmentReference(string $shipmentReference = null): ShipmentListItem
    {
        return new self($this->shipmentId, $this->shipmentDate, $shipmentReference, $this->shipmentItems);
    }

    /**
     * @param \BolCom\RetailerApi\Model\Shipment\ShipmentItemListItem[]|null $shipmentItems
     * @return \BolCom\RetailerApi\Model\Shipment\ShipmentListItem
     */
    public function withShipmentItems(array $shipmentItems): ShipmentListItem
    {
        return new self($this->shipmentId, $this->shipmentDate, $this->shipmentReference, $shipmentItems);
    }

    public static function fromArray(array $data): ShipmentListItem
    {
        if (! isset($data['shipmentId']) || ! \is_int($data['shipmentId'])) {
            throw new \InvalidArgumentException("Key 'shipmentId' is missing in data array or is not a int");
        }

        $shipmentId = ShipmentId::fromScalar($data['shipmentId']);

        if (! isset($data['shipmentDate']) || ! \is_string($data['shipmentDate'])) {
            throw new \InvalidArgumentException("Key 'shipmentDate' is missing in data array or is not a string");
        }

        $shipmentDate = \BolCom\RetailerApi\Model\DateTime::fromString($data['shipmentDate']);

        if (isset($data['shipmentReference'])) {
            if (! \is_string($data['shipmentReference'])) {
                throw new \InvalidArgumentException("Value for 'shipmentReference' is not a string in data array");
            }

            $shipmentReference = $data['shipmentReference'];
        } else {
            $shipmentReference = null;
        }

        if (! isset($data['shipmentItems']) || ! \is_array($data['shipmentItems'])) {
            throw new \InvalidArgumentException("Key 'shipmentItems' is missing in data array or is not an array");
        }

        $shipmentItems = [];

        foreach ($data['shipmentItems'] as $__value) {
            if (! \is_array($data['shipmentItems'])) {
                throw new \InvalidArgumentException("Key 'shipmentItems' in data array or is not an array of arrays");
            }

            $shipmentItems[] = ShipmentItemListItem::fromArray($__value);
        }

        return new self(
            $shipmentId,
            $shipmentDate,
            $shipmentReference,
            $shipmentItems
        );
    }
}
