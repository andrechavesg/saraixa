<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCowoKwM\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCowoKwM/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCowoKwM.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCowoKwM\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerCowoKwM\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'CowoKwM',
    'container.build_id' => 'cc556c5b',
    'container.build_time' => 1553786987,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerCowoKwM');
