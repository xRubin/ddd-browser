<?php declare(strict_types=1);

namespace ddd\browser\values;

use ddd\domain\values\AbstractDomainValue;
use Webmozart\Assert\Assert;

final class Fingerprint extends AbstractDomainValue
{
    private string $value;

    /**
     * Fingerprint constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        Assert::stringNotEmpty($value, 'INVALID_FINGERPRINT');

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}