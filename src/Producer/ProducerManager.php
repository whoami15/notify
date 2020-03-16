<?php

namespace Yoeunes\Notify\Producer;

use Yoeunes\Notify\Config\ConfigInterface;
use Yoeunes\Notify\Manager\AbstractManager;

final class ProducerManager extends AbstractManager
{
    private $config;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    protected function getDefaultDriver()
    {
        return $this->config->get('default');
    }
}
