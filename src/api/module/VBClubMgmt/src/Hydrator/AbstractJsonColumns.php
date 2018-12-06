<?php

namespace VBClubMgmt\Hydrator;

use Project\Hydrator\Strategy\JsonDecodeStrategy;

abstract class AbstractJsonColumns extends \Project\Hydrator\CamelCase
{
    /**
     * AbstractJsonColumns constructor.
     *
     * @param bool $underscoreSeparatedKeys
     * @param bool $methodExistsCheck
     */
    public function __construct($underscoreSeparatedKeys = true, $methodExistsCheck = false)
    {
        parent::__construct($underscoreSeparatedKeys, $methodExistsCheck);

        $this->addColumnStrategies();
    }

    /**
     * Add JsonDecodeStrategy for selected columns
     */
    private function addColumnStrategies()
    {
        $strategy = new JsonDecodeStrategy();
        foreach ($this->getColumns() as $column) {
            $this->addStrategy($column, $strategy);
        }
    }

    /**
     * Get array of JSON formatted column names
     *
     * @return array
     */
    abstract protected function getColumns(): array;
}
