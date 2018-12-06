<?php

namespace Project\Hydrator;

use Zend\Hydrator\ClassMethods;

class CamelCase extends ClassMethods
{
    /**
     * Disable Naming strategy in order to extract camelCased data
     * @inheritdoc
     */
    public function extract($object)
    {
        $namingStrategy = $this->getNamingStrategy();
        $this->removeNamingStrategy();
        $extract = parent::extract($object);
        $this->setNamingStrategy($namingStrategy);

        return $extract;
    }
}
