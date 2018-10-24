<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\ProcessStatus;

final class EventType
{
    public const OPTIONS = [
        'CONFIRM_SHIPMENT' => 0,
        'CANCEL_ORDER' => 1,
        'CHANGE_TRANSPORT' => 2,
        'HANDLE_RETURN_ITEM' => 3,
        'CREATE_INBOUND' => 4,
    ];

    public const CONFIRM_SHIPMENT = 0;
    public const CANCEL_ORDER = 1;
    public const CHANGE_TRANSPORT = 2;
    public const HANDLE_RETURN_ITEM = 3;
    public const CREATE_INBOUND = 4;

    private $name;
    private $value;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->value = self::OPTIONS[$name];
    }

    public static function cONFIRM_SHIPMENT(): self
    {
        return new self('CONFIRM_SHIPMENT');
    }

    public static function cANCEL_ORDER(): self
    {
        return new self('CANCEL_ORDER');
    }

    public static function cHANGE_TRANSPORT(): self
    {
        return new self('CHANGE_TRANSPORT');
    }

    public static function hANDLE_RETURN_ITEM(): self
    {
        return new self('HANDLE_RETURN_ITEM');
    }

    public static function cREATE_INBOUND(): self
    {
        return new self('CREATE_INBOUND');
    }

    public static function fromName(string $value): self
    {
        if (! isset(self::OPTIONS[$value])) {
            throw new \InvalidArgumentException('Unknown enum name given');
        }

        return self::{$value}();
    }

    public static function fromValue($value): self
    {
        foreach (self::OPTIONS as $name => $v) {
            if ($v === $value) {
                return self::{$name}();
            }
        }

        throw new \InvalidArgumentException('Unknown enum value given');
    }

    public function equals(EventType $other): bool
    {
        return \get_class($this) === \get_class($other) && $this->name === $other->name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function toString(): string
    {
        return $this->name;
    }
}
