<?php

namespace Project\Hydrator\ClassMethods;

use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\NamingStrategy\UnderscoreNamingStrategy;

class CamelCase extends ClassMethods
{
    /**
     * @inheritdoc
     */
    public function __construct($underscoreSeparatedKeys = false, $methodExistsCheck = false)
    {
        parent::__construct($underscoreSeparatedKeys, $methodExistsCheck);
    }

    /**
     * Convert DB data to camelCase before hydrating
     * @inheritdoc
     */
    public function hydrate(array $data, $object)
    {
        $namingStrategy = new UnderscoreNamingStrategy();
        $hydratedData = [];
        foreach ($data as $property => $value) {
            $hydratedData[$namingStrategy->hydrate($property)] = $value;
        }

        return parent::hydrate($hydratedData, $object);
    }
}
