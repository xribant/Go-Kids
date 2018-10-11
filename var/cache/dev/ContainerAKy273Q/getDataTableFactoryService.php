<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Omines\DataTablesBundle\DataTableFactory' shared autowired service.

include_once $this->targetDirs[3].'/vendor/omines/datatables-bundle/src/DataTableRendererInterface.php';
include_once $this->targetDirs[3].'/vendor/omines/datatables-bundle/src/Twig/TwigRenderer.php';
include_once $this->targetDirs[3].'/vendor/omines/datatables-bundle/src/DependencyInjection/Instantiator.php';
include_once $this->targetDirs[3].'/vendor/omines/datatables-bundle/src/DataTableFactory.php';

return $this->services['Omines\DataTablesBundle\DataTableFactory'] = new \Omines\DataTablesBundle\DataTableFactory($this->parameters['datatables.config'], new \Omines\DataTablesBundle\Twig\TwigRenderer(($this->services['twig'] ?? $this->getTwigService())), new \Omines\DataTablesBundle\DependencyInjection\Instantiator(array('Omines\\DataTablesBundle\\Adapter\\AdapterInterface' => new \Symfony\Component\DependencyInjection\ServiceLocator(array('Omines\\DataTablesBundle\\Adapter\\ArrayAdapter' => function () {
    return new \Omines\DataTablesBundle\Adapter\ArrayAdapter();
}, 'Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter' => function () {
    return (isset($this->factories['service_container']['Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter']) ? $this->factories['service_container']['Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter']() : $this->load('getORMAdapterService.php'));
})), 'Omines\\DataTablesBundle\\Column\\AbstractColumn' => new \Symfony\Component\DependencyInjection\ServiceLocator(array('Omines\\DataTablesBundle\\Column\\TwigColumn' => function () {
    return (isset($this->factories['service_container']['Omines\DataTablesBundle\Column\TwigColumn']) ? $this->factories['service_container']['Omines\DataTablesBundle\Column\TwigColumn']() : $this->load('getTwigColumnService.php'));
})), 'Omines\\DataTablesBundle\\DataTableTypeInterface' => new \Symfony\Component\DependencyInjection\ServiceLocator(array()))));