<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PaAmpFZ' shared service.

return $this->privates['.service_locator.PaAmpFZ'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('usuario' => function (): \App\Entity\Usuario {
    return ($this->privates['.errored..service_locator.PaAmpFZ.App\Entity\Usuario'] ?? $this->load('getUsuarioService.php'));
}));
