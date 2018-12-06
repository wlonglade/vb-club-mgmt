<?php

namespace Project\Hydrator\Strategy;

use Zend\Hydrator\Strategy\StrategyInterface;

class JsonDecodeStrategy implements StrategyInterface
{

    /**
     * @inheritdoc
     */
    public function extract($value)
    {
        $decoded = \json_decode($value, true);
        if ($decoded) {
            return $decoded;
        }

        return $value;
    }

    /**
     * @inheritdoc
     */
    public function hydrate($value)
    {
        $decoded = \json_decode($value, true);
        if ($decoded !== null) {
            return $decoded;
        }

        return $value;
    }
}
