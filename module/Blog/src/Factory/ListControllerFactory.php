<?php

declare(strict_types=1);

namespace Blog\Factory;

use Blog\Controller\ListController;
use Blog\Model\PostRepositoryInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ListControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ListController($container->get(PostRepositoryInterface::class));
    }
}
