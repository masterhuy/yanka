<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFkuiklk\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFkuiklk/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFkuiklk.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFkuiklk\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerFkuiklk\appDevDebugProjectContainer([
    'container.build_hash' => 'Fkuiklk',
    'container.build_id' => 'f113371a',
    'container.build_time' => 1571735022,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFkuiklk');
