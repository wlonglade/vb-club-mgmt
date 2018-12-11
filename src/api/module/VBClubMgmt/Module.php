<?php
namespace VBClubMgmt;

use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    private $configFactory;

    public function __construct()
    {
        $this->configFactory = new \Zend\Config\Factory;
    }

    public function getConfig()
    {
        return $this->configFactory::fromFiles(\glob(__DIR__.'/config/*.*'));
    }

    public function getAutoloaderConfig()
    {
        return [
            'ZF\Apigility\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }
}
