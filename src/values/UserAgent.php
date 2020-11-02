<?php declare(strict_types=1);

namespace ddd\browser\values;

use ddd\domain\values\AbstractDomainValue;
use Webmozart\Assert\Assert;

final class UserAgent extends AbstractDomainValue
{
    private string $value;

    /**
     * UserAgent constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        Assert::stringNotEmpty($value, 'INVALID_USER_AGENT');

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