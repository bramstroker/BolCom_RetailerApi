<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Transport;

final class TransporterCode
{
    const OPTIONS = [
        'BRIEFPOST' => 'BRIEFPOST',
        'UPS' => 'UPS',
        'TNT' => 'TNT',
        'TNT_EXTRA' => 'TNT-EXTRA',
        'TNT_BRIEF' => 'TNT_BRIEF',
        'TNT_EXPRESS' => 'TNT-EXPRESS',
        'DYL' => 'DYL',
        'DPD_NL' => 'DPD-NL',
        'DPD_BE' => 'DPD-BE',
        'BPOST_BE' => 'BPOST_BE',
        'BPOST_BRIEF' => 'BPOST_BRIEF',
        'DHLFORYOU' => 'DHLFORYOU',
        'GLS' => 'GLS',
        'FEDEX_NL' => 'FEDEX_NL',
        'FEDEX_BE' => 'FEDEX_BE',
        'OTHER' => 'OTHER',
        'DHL' => 'DHL',
        'DHL_DE' => 'DHL_DE',
        'DHL_GLOBAL_MAIL' => 'DHL-GLOBAL-MAIL',
        'TSN' => 'TSN',
        'FIEGE' => 'FIEGE',
        'TRANSMISSION' => 'TRANSMISSION',
        'PARCEL_NL' => 'PARCEL-NL',
        'LOGOIX' => 'LOGOIX',
        'PACKS' => 'PACKS',
        'COURIER' => 'COURIER',
        'RJP' => 'RJP',
    ];

    const BRIEFPOST = 'BRIEFPOST';
    const UPS = 'UPS';
    const TNT = 'TNT';
    const TNT_EXTRA = 'TNT-EXTRA';
    const TNT_BRIEF = 'TNT_BRIEF';
    const TNT_EXPRESS = 'TNT-EXPRESS';
    const DYL = 'DYL';
    const DPD_NL = 'DPD-NL';
    const DPD_BE = 'DPD-BE';
    const BPOST_BE = 'BPOST_BE';
    const BPOST_BRIEF = 'BPOST_BRIEF';
    const DHLFORYOU = 'DHLFORYOU';
    const GLS = 'GLS';
    const FEDEX_NL = 'FEDEX_NL';
    const FEDEX_BE = 'FEDEX_BE';
    const OTHER = 'OTHER';
    const DHL = 'DHL';
    const DHL_DE = 'DHL_DE';
    const DHL_GLOBAL_MAIL = 'DHL-GLOBAL-MAIL';
    const TSN = 'TSN';
    const FIEGE = 'FIEGE';
    const TRANSMISSION = 'TRANSMISSION';
    const PARCEL_NL = 'PARCEL-NL';
    const LOGOIX = 'LOGOIX';
    const PACKS = 'PACKS';
    const COURIER = 'COURIER';
    const RJP = 'RJP';

    private $name;
    private $value;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->value = self::OPTIONS[$name];
    }

    public static function BRIEFPOST(): self
    {
        return new self('BRIEFPOST');
    }

    public static function UPS(): self
    {
        return new self('UPS');
    }

    public static function TNT(): self
    {
        return new self('TNT');
    }

    public static function TNT_EXTRA(): self
    {
        return new self('TNT_EXTRA');
    }

    public static function TNT_BRIEF(): self
    {
        return new self('TNT_BRIEF');
    }

    public static function TNT_EXPRESS(): self
    {
        return new self('TNT_EXPRESS');
    }

    public static function DYL(): self
    {
        return new self('DYL');
    }

    public static function DPD_NL(): self
    {
        return new self('DPD_NL');
    }

    public static function DPD_BE(): self
    {
        return new self('DPD_BE');
    }

    public static function BPOST_BE(): self
    {
        return new self('BPOST_BE');
    }

    public static function BPOST_BRIEF(): self
    {
        return new self('BPOST_BRIEF');
    }

    public static function DHLFORYOU(): self
    {
        return new self('DHLFORYOU');
    }

    public static function GLS(): self
    {
        return new self('GLS');
    }

    public static function FEDEX_NL(): self
    {
        return new self('FEDEX_NL');
    }

    public static function FEDEX_BE(): self
    {
        return new self('FEDEX_BE');
    }

    public static function OTHER(): self
    {
        return new self('OTHER');
    }

    public static function DHL(): self
    {
        return new self('DHL');
    }

    public static function DHL_DE(): self
    {
        return new self('DHL_DE');
    }

    public static function DHL_GLOBAL_MAIL(): self
    {
        return new self('DHL_GLOBAL_MAIL');
    }

    public static function TSN(): self
    {
        return new self('TSN');
    }

    public static function FIEGE(): self
    {
        return new self('FIEGE');
    }

    public static function TRANSMISSION(): self
    {
        return new self('TRANSMISSION');
    }

    public static function PARCEL_NL(): self
    {
        return new self('PARCEL_NL');
    }

    public static function LOGOIX(): self
    {
        return new self('LOGOIX');
    }

    public static function PACKS(): self
    {
        return new self('PACKS');
    }

    public static function COURIER(): self
    {
        return new self('COURIER');
    }

    public static function RJP(): self
    {
        return new self('RJP');
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

    public function equals(TransporterCode $other): bool
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
