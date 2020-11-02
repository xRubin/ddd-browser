<?php declare(strict_types=1);

namespace ddd\browser\values;

use ddd\domain\values\AbstractDomainValue;
use Webmozart\Assert\Assert;

final class IP extends AbstractDomainValue
{
    private string $value;

    /**
     * IP constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        Assert::ip($value, 'INVALID_IP');

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