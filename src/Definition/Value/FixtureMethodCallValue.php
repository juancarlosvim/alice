<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\Alice\Definition\Value;

use Nelmio\Alice\Definition\ValueInterface;

/**
 * Value object representing "@user0->getUserName()"
 */
final class FixtureMethodCallValue implements ValueInterface
{
    /**
     * @var FixtureReferenceValue
     */
    private $reference;

    /**
     * @var FunctionCallValue
     */
    private $function;

    public function __construct(ValueInterface $reference, FunctionCallValue $function)
    {
        $this->reference = $reference;
        $this->function = $function;
    }

    public function getReference(): ValueInterface
    {
        return $this->reference;
    }

    public function getFunctionCall(): FunctionCallValue
    {
        return $this->function;
    }

    /**
     * @inheritdoc
     */
    public function getValue(): array
    {
        return [
            $this->reference,
            $this->function,
        ];
    }
}
