<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJaey5nz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJaey5nz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJaey5nz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJaey5nz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerJaey5nz\appDevDebugProjectContainer([
    'container.build_hash' => 'Jaey5nz',
    'container.build_id' => 'c68b5330',
    'container.build_time' => 1569830016,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJaey5nz');
