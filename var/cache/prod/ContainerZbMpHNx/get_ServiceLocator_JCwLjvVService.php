<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.jCwLjvV' shared service.

return $this->privates['.service_locator.jCwLjvV'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('horaLancada' => function (): \App\Entity\HoraLancada {
    return ($this->privates['.errored..service_locator.jCwLjvV.App\Entity\HoraLancada'] ?? $this->load('getHoraLancadaService.php'));
}));