<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUzGiJH4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUzGiJH4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUzGiJH4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUzGiJH4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUzGiJH4\App_KernelDevDebugContainer([
    'container.build_hash' => 'UzGiJH4',
    'container.build_id' => 'f74ee807',
    'container.build_time' => 1709303620,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUzGiJH4');
