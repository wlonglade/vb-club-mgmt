<?php

namespace Project;

use Zend\Hydrator\NamingStrategy\UnderscoreNamingStrategy;
use ZF\Apigility\DbConnectedResource;

class CamelCaseDbConnectedResource extends DbConnectedResource
{
    protected function retrieveData($data)
    {
        $data = parent::retrieveData($data);

        $namingStrategy = new UnderscoreNamingStrategy();
        $extractedData = [];
        foreach ($data as $property => $value) {
            $value = \is_array($value) ? \json_encode($value) : $value;
            $extractedData[$namingStrategy->extract($property)] = $value;
        }

        return $extractedData;
    }
}
