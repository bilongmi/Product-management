<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEVxYIpq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEVxYIpq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEVxYIpq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEVxYIpq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEVxYIpq\App_KernelDevDebugContainer([
    'container.build_hash' => 'EVxYIpq',
    'container.build_id' => 'd7ae65e8',
    'container.build_time' => 1733238208,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEVxYIpq');
